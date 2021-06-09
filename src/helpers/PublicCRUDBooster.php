<?php

namespace crocodicstudio\crudbooster\helpers;

use Cache;
use DB;
use Request;
use Route;
use Schema;
use Session;

class PublicCRUDBooster extends CRUDBooster
{
    public static function user()
    {
        return DB::table(config('crudbooster.STANDARD_USER_TABLE'))->where('id', Session::get('user_id'))->first();
    }
    
    public static function userId()
    {
        return Session::get('user_id');
    }
    
    public static function userName()
    {
        return Session::get('user_name');
    }
    
    public static function isLocked()
    {
        return Session::get('user_lock');
    }
    
    public static function publicPath($path = null)
    {
        return url('/'.$path);
    }
    
    public static function insertPublicLog($description, $details = '')
    {
        if (CRUDBooster::getSetting('api_debug_mode')) {
            $a = [];
            $a['created_at'] = date('Y-m-d H:i:s');
            $a['ipaddress'] = $_SERVER['REMOTE_ADDR'];
            $a['useragent'] = $_SERVER['HTTP_USER_AGENT'];
            $a['url'] = Request::url();
            $a['description'] = $description;
            $a['details'] = $details;
            $a['users_id'] = self::userId();
            DB::table('logs')->insert($a);
        }
    }
}
