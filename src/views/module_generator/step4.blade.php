@extends("crudbooster::admin_template")
@section("content")

    <ul class="nav nav-tabs">
        <li role="presentation"><a href="{{Route('ModulsControllerGetStep1')."/".$id}}"><i class='fa fa-info'></i> Passo 1 - Informação de Módulo</a></li>
        <li role="presentation"><a href="{{Route('ModulsControllerGetStep2')."/".$id}}"><i class='fa fa-table'></i> Passo 2 - Exibição de Tabela</a></li>
        <li role="presentation"><a href="{{Route('ModulsControllerGetStep3')."/".$id}}"><i class='fa fa-plus-square-o'></i> Passo 3 - Exibição de Formulário</a></li>
        <li role="presentation" class="active"><a href="{{Route('ModulsControllerGetStep4')."/".$id}}"><i class='fa fa-wrench'></i> Passo 4 - Configuração</a></li>
    </ul>

    <div class="box box-default">
        <div class="box-header">
            <h1 class="box-title">{{cbLang('Configuration')}}</h1>
        </div>
        <form method='post' action='{{Route('ModulsControllerPostStepFinish')}}'>
            {{csrf_field()}}
            <input type="hidden" name="id" value='{{$id}}'>
            <div class="box-body">

                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>{{cbLang('Title')}}</label>
                            <input type="text" name="title_field" value="{{$cb_title_field}}" class='form-control'>
                        </div>
                    </div>

                    <div class="col-sm-5">
                        <div class="form-group">
                            <label>{{cbLang('Limit Data')}}</label>
                            <input type="number" name="limit" value="{{$cb_limit}}" class='form-control'>
                        </div>
                    </div>

                    <div class="col-sm-7">
                        <div class="form-group">
                            <label>Order By</label>
                            <?php
                            if (is_array($cb_orderby)) {
                                $orderby = [];
                                foreach ($cb_orderby as $k => $v) {
                                    $orderby[] = $k.','.$v;
                                }
                                $orderby = implode(";", $orderby);
                            } else {
                                $orderby = $cb_orderby;
                            }
                            ?>
                            <input type="text" name="orderby" value="{{$orderby}}" class='form-control'>
                            <div class="help-block">Ex: nome_coluna,desc</div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4">
                        <div class="row">

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Global Privilege</label>
                                    <label class='radio-inline'>
                                        <input type='radio' name='global_privilege' {{($cb_global_privilege)?"checked":""}} value='true'/> TRUE
                                    </label>
                                    <label class='radio-inline'>
                                        <input {{(!$cb_global_privilege)?"checked":""}} type='radio' name='global_privilege' value='false'/> FALSE
                                    </label>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label><i>{{cbLang('show_button_text')}}</i> {{cbLang('Table Action')}}</label>
                                    <label class='radio-inline'>
                                        <input {{($cb_button_table_action)?"checked":""}} type='radio' name='button_table_action' value='true'/> TRUE
                                    </label>
                                    <label class='radio-inline'>
                                        <input {{(!$cb_button_table_action)?"checked":""}} type='radio' name='button_table_action' value='false'/> FALSE
                                    </label>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label><i>{{cbLang('show_button_text')}}</i> {{cbLang('Bulk Action')}}</label>
                                    <label class='radio-inline'>
                                        <input {{($cb_button_bulk_action)?"checked":""}} type='radio' name='button_bulk_action' value='true'/> TRUE
                                    </label>
                                    <label class='radio-inline'>
                                        <input {{(!$cb_button_bulk_action)?"checked":""}} type='radio' name='button_bulk_action' value='false'/> FALSE
                                    </label>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>{{cbLang('Button Style')}}</label>
                                    <label class='radio-inline'>
                                        <input {{($cb_button_action_style=='button_icon')?"checked":""}} type='radio' name='button_action_style'
                                               value='button_icon'/> Icon
                                    </label>
                                    <label class='radio-inline'>
                                        <input {{($cb_button_action_style=='button_icon_text')?"checked":""}} type='radio' name='button_action_style'
                                               value='button_icon_text'/> Icon & Text
                                    </label>
                                    <label class='radio-inline'>
                                        <input {{($cb_button_action_style=='button_text')?"checked":""}} type='radio' name='button_action_style'
                                               value='button_text'/> Button Text
                                    </label>
                                    <label class='radio-inline'>
                                        <input {{($cb_button_action_style=='button_dropdown')?"checked":""}} type='radio' name='button_action_style'
                                               value='button_dropdown'/> Dropdown
                                    </label>
                                </div>
                            </div>


                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="row">

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label><i>{{cbLang('show_button_text')}}</i> {{cbLang('Add')}}</label>
                                    <label class='radio-inline'>
                                        <input {{($cb_button_add)?"checked":""}} type='radio' name='button_add' value='true'/> TRUE
                                    </label>
                                    <label class='radio-inline'>
                                        <input {{(!$cb_button_add)?"checked":""}} type='radio' name='button_add' value='false'/> FALSE
                                    </label>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label><i>{{cbLang('show_button_text')}}</i> {{cbLang('Edit')}}</label>
                                    <label class='radio-inline'>
                                        <input {{($cb_button_edit)?"checked":""}} type='radio' name='button_edit' value='true'/> TRUE
                                    </label>
                                    <label class='radio-inline'>
                                        <input {{(!$cb_button_edit)?"checked":""}} type='radio' name='button_edit' value='false'/> FALSE
                                    </label>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label><i>{{cbLang('show_button_text')}}</i> {{cbLang('Delete')}}</label>
                                    <label class='radio-inline'>
                                        <input {{($cb_button_delete)?"checked":""}} type='radio' name='button_delete' value='true'/> TRUE
                                    </label>
                                    <label class='radio-inline'>
                                        <input {{(!$cb_button_delete)?"checked":""}} type='radio' name='button_delete' value='false'/> FALSE
                                    </label>
                                </div>
                            </div>


                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label><i>{{cbLang('show_button_text')}}</i> {{cbLang('Detail')}}</label>
                                    <label class='radio-inline'>
                                        <input {{($cb_button_detail)?"checked":""}} type='radio' name='button_detail' value='true'/> TRUE
                                    </label>
                                    <label class='radio-inline'>
                                        <input {{(!$cb_button_detail)?"checked":""}} type='radio' name='button_detail' value='false'/> FALSE
                                    </label>
                                </div>
                            </div>


                        </div>


                    </div>

                    <div class="col-sm-4">
                        <div class="row">

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label><i>{{cbLang('show_button_text')}}</i> {{cbLang('Show Data')}}</label>
                                    <label class='radio-inline'>
                                        <input {{($cb_button_show)?"checked":""}} type='radio' name='button_show' value='true'/> TRUE
                                    </label>
                                    <label class='radio-inline'>
                                        <input {{(!$cb_button_show)?"checked":""}} type='radio' name='button_show' value='false'/> FALSE
                                    </label>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label><i>{{cbLang('show_button_text')}}</i> {{cbLang('Filter & Sorting')}}</label>
                                    <label class='radio-inline'>
                                        <input {{($cb_button_filter)?"checked":""}} type='radio' name='button_filter' value='true'/> TRUE
                                    </label>
                                    <label class='radio-inline'>
                                        <input {{(!$cb_button_filter)?"checked":""}} type='radio' name='button_filter' value='false'/> FALSE
                                    </label>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label><i>{{cbLang('show_button_text')}}</i> {{cbLang('Import')}}</label>
                                    <label class='radio-inline'>
                                        <input {{($cb_button_import)?"checked":""}} type='radio' name='button_import' value='true'/> TRUE
                                    </label>
                                    <label class='radio-inline'>
                                        <input {{(!$cb_button_import)?"checked":""}} type='radio' name='button_import' value='false'/> FALSE
                                    </label>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label><i>{{cbLang('show_button_text')}}</i> {{cbLang('Export')}}</label>
                                    <label class='radio-inline'>
                                        <input {{($cb_button_export)?"checked":""}} type='radio' name='button_export' value='true'/> TRUE
                                    </label>
                                    <label class='radio-inline'>
                                        <input {{(!$cb_button_export)?"checked":""}} type='radio' name='button_export' value='false'/> FALSE
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <div class="box-footer">
                <div align="right">
                    <button type="button" onclick="location.href='{{CRUDBooster::mainpath('step3').'/'.$id}}'" class="btn btn-default">&laquo; {{cbLang('button_back')}}</button>
                    <input type="submit" name="submit" class='btn btn-primary' value="{{cbLang('button_save')}}">
                </div>
            </div>
        </form>
    </div>


@endsection