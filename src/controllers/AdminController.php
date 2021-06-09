<?php
namespace crocodicstudio\crudbooster\controllers;

use CRUDBooster;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AdminController extends CBController
{

    function getIndex()
    {
        $data = [];
        $data['page_title'] = '<strong>Dashboard</strong>';

        return view('crudbooster::home', $data);
    }

    public function getNewPassword($hash)
    {
        if (CRUDBooster::myId() || $hash === NULL) {
            return redirect('/');
        }

        $forgot = DB::table('cms_forgot_password')->where('hash', $hash)->first();

        if ($forgot === NULL) {
            return redirect()->route('getLogin')->with([
                'message' => cbLang('message_forgot_invalid'),
                'message_type' => 'warning'
            ]);
        }

        if ($forgot->used == 1) {
            return redirect()->route('getLogin')->with([
                'message' => cbLang('message_forgot_already_used'),
                'message_type' => 'warning'
            ]);
        }

        if ($forgot->valid == 0) {
            return redirect()->route('getLogin')->with([
                'message' => cbLang('message_forgot_expired'),
                'message_type' => 'warning'
            ]);
        }

        $data['hash'] = $hash;
        return view('crudbooster::new_password', $data);
    }

    public function postNewPassword()
    {
        $table = config('crudbooster.USER_TABLE');
        $validator = Validator::make(Request::all(), [
            'password' => 'required|min:6',
            'password_confirmation' => 'required|same:password'
        ]);

        if ($validator->fails()) {
            $message = $validator->errors()->all();

            return redirect()->back()->with([
                'message' => implode('<br />', $message),
                'message_type' => 'danger'
            ]);
        }

        $posts = Request::all();

        $user = DB::table('cms_forgot_password')->select($table . '.id', $table . '.email')
            ->join($table, $table . '.id', '=', 'cms_forgot_password.cms_user_id')
            ->where('cms_forgot_password.hash', $posts['hash'])
            ->where('cms_forgot_password.used', 0)
            ->where('cms_forgot_password.valid', 1)
            ->first();

        DB::table($table)->where('id', $user->id)->update([
            'password' => \Hash::make($posts['password'])
        ]);

        DB::table('cms_forgot_password')->where('hash', $posts['hash'])->update([
            'used' => 1
        ]);

        // insert log
        CRUDBooster::insertLog(cbLang("log_new_password", [
            'email' => $user->email
        ]));

        return redirect()->route('getLogin')->with([
            'message' => cbLang("message_after_new_password"),
            'message_type' => 'success'
        ]);
    }

    public function getLockscreen()
    {
        if (! CRUDBooster::myId()) {
            Session::flush();

            return redirect()->route('getLogin')->with([
                'message' => cbLang('alert_session_expired'),
                'message_type' => 'warning'
            ]);
        }

        Session::put('admin_lock', 1);

        return view('crudbooster::lockscreen');
    }

    public function postUnlockScreen()
    {
        $id = CRUDBooster::myId();
        $password = request('password');
        $users = DB::table(config('crudbooster.USER_TABLE'))->where('id', $id)->first();

        if (\Hash::check($password, $users->password)) {
            Session::put('admin_lock', 0);

            return redirect(CRUDBooster::adminPath());
        } else {
            echo "<script>alert('" . cbLang('alert_password_wrong') . "');history.go(-1);</script>";
        }
    }

    public function getLogin()
    {
        if (CRUDBooster::myId()) {
            return redirect(CRUDBooster::adminPath());
        }

        return view('crudbooster::login');
    }

    public function postLogin()
    {
        $validator = Validator::make(Request::all(), [
            'email' => 'required|email|exists:' . config('crudbooster.USER_TABLE'),
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            $message = $validator->errors()->all();

            return redirect()->back()->with([
                'message' => implode('<br />', $message),
                'message_type' => 'danger'
            ]);
        }

        $email = Request::input("email");
        $password = Request::input("password");
        $users = DB::table(config('crudbooster.USER_TABLE'))->where("email", $email)->first();

        if (\Hash::check($password, $users->password)) {
            $priv = DB::table("cms_privileges")->where("id", $users->id_cms_privileges)->first();

            $roles = DB::table('cms_privileges_roles')->where('id_cms_privileges', $users->id_cms_privileges)
                ->join('cms_moduls', 'cms_moduls.id', '=', 'id_cms_moduls')
                ->select('cms_moduls.name', 'cms_moduls.path', 'is_visible', 'is_create', 'is_read', 'is_edit', 'is_delete')
                ->get();

            $photo = ($users->photo) ? asset($users->photo) : asset('vendor/crudbooster/avatar.jpg');
            Session::put('admin_id', $users->id);
            Session::put('admin_is_superadmin', $priv->is_superadmin);
            Session::put('admin_name', $users->name);
            Session::put('admin_photo', $photo);
            Session::put('admin_privileges_roles', $roles);
            Session::put("admin_privileges", $users->id_cms_privileges);
            Session::put('admin_privileges_name', $priv->name);
            Session::put('admin_lock', 0);
            Session::put('theme_color', $priv->theme_color);
            Session::put("appname", get_setting('appname'));

            CRUDBooster::insertLog(cbLang("log_login", [
                'email' => $users->email,
                'ip' => Request::server('REMOTE_ADDR')
            ]));

            $cb_hook_session = new \App\Http\Controllers\CBHook();
            $cb_hook_session->afterLogin();

            return redirect(CRUDBooster::adminPath());
        } else {
            return redirect()->route('getLogin')->with([
                'message' => cbLang('alert_password_wrong'),
                'message_type' => 'warning'
            ]);
        }
    }

    public function getForgot()
    {
        if (CRUDBooster::myId()) {
            return redirect(CRUDBooster::adminPath());
        }

        return view('crudbooster::forgot');
    }

    public function postForgot()
    {
        $validator = Validator::make(Request::all(), [
            'email' => 'required|email|exists:' . config('crudbooster.USER_TABLE')
        ]);

        if ($validator->fails()) {
            $message = $validator->errors()->all();

            return redirect()->back()->with([
                'message' => implode('<br />', $message),
                'message_type' => 'danger'
            ]);
        }

        $rand_string = str_random(5);
        $hash = md5($rand_string);

        $table = 'cms_forgot_password';

        $user = DB::table(config('crudbooster.USER_TABLE'))->where('email', Request::input('email'))->first();

        $row_assign = [];
        $row_assign['hash'] = $hash;
        $row_assign['cms_user_id'] = $user->id;

        CRUDBooster::insert($table, $row_assign);

        $url = sprintf("%s://%s%s%s%s", isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http', $_SERVER['SERVER_NAME'], isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] != '80' && $_SERVER['SERVER_PORT'] != '8080' ? ':' . $_SERVER['SERVER_PORT'] : '', '/admin/new-password/', $hash);

        $data = [];
        $data['link'] = $url;
        $data['name'] = $user->name;

        CRUDBooster::sendEmail([
            'to' => $user->email,
            'data' => $data,
            'template' => 'forgot_password_backend'
        ]);

        CRUDBooster::insertLog(cbLang("log_forgot", [
            'email' => g('email'),
            'ip' => Request::server('REMOTE_ADDR')
        ]));

        return redirect()->route('getLogin')->with([
            'message' => cbLang("message_forgot_password", [
                'email' => $user->email
            ]),
            'message_type' => 'success'
        ]);
    }

    public function getLogout()
    {
        $me = CRUDBooster::me();
        CRUDBooster::insertLog(cbLang("log_logout", [
            'email' => $me->email
        ]));

        Session::flush();

        return redirect()->route('getLogin')->with([
            'message' => cbLang("message_after_logout"),
            'message_type' => 'warning'
        ]);
    }
    
    
    
    public function getHelp(){
        if (! CRUDBooster::myId()) {
            Session::flush();
            
            return redirect()->route('getLogin')->with([
                'message' => cbLang('alert_session_expired'),
                'message_type' => 'warning'
            ]);
        }
        $data = [];
        $data['page_title'] = '<strong>'.cbLang('Help').'</strong>';
        
        return view('crudbooster::help',$data);
    }
}
