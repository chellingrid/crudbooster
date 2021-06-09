@extends("crudbooster::admin_template")
@section("content")

    @push('head')
        <link rel='stylesheet' href='<?php echo asset("vendor/crudbooster/assets/select2/dist/css/select2.min.css")?>'/>
        <style>
            .select2-container--default .select2-selection--single {
                border-radius: 0px !important
            }

            .select2-container .select2-selection--single {
                height: 35px
            }
        </style>
    @endpush

    @push('bottom')
        <script src='<?php echo asset("vendor/crudbooster/assets/select2/dist/js/select2.full.min.js")?>'></script>
        <script>
            $(function () {
                $('.select2').select2({
                    width: "100%"
                    });

            })
            $(function () {
                $('select[name=table]').change(function () {
                    var v = $(this).val().replace(".", "_");
                    $.get("{{CRUDBooster::mainpath('check-slug')}}/" + v, function (resp) {
                        if (resp.total == 0) {
                            $('input[name=path]').val(v);
                        } else {
                            v = v + resp.lastid;
                            $('input[name=path]').val(v);
                        }
                    })

                })
            })
        </script>
    @endpush
    
    @push('bottom')
        <script type="text/javascript">
            $(function () {
                function format(icon) {
                    var originalOption = icon.element;
                    var label = $(originalOption).text();
                    var val = $(originalOption).val();
                    if (!val) return label;
                    var $resp = $('<span><i style="margin-top:5px" class="pull-right ' + $(originalOption).val() + '"></i> ' + $(originalOption).data('label') + '</span>');
                    return $resp;
                }

                $('#icon').select2({
                    width: "100%",
                    templateResult: format,
                    templateSelection: format
                });
            })
        </script>
    @endpush

    <ul class="nav nav-tabs">
        @if($id)
            <li role="presentation" class="active"><a href="{{Route('ModulsControllerGetStep1')."/".$id}}"><i class='fa fa-info'></i> Passo 1 - Informação de Módulo</a></li>
            <li role="presentation"><a href="{{Route('ModulsControllerGetStep2')."/".$id}}"><i class='fa fa-table'></i> Passo 2 - Exibição de Tabela</a></li>
            <li role="presentation"><a href="{{Route('ModulsControllerGetStep3')."/".$id}}"><i class='fa fa-plus-square-o'></i> Passo 3 - Exibição de Formulário</a></li>
            <li role="presentation"><a href="{{Route('ModulsControllerGetStep4')."/".$id}}"><i class='fa fa-wrench'></i> Passo 4 - Configuração</a></li>
        @else
            <li role="presentation" class="active"><a href="#"><i class='fa fa-info'></i> Passo 1 - Informação de Módulo</a></li>
            <li role="presentation"><a href="#"><i class='fa fa-table'></i> Passo 2 - Exibição de Tabela</a></li>
            <li role="presentation"><a href="#"><i class='fa fa-plus-square-o'></i> Passo 3 - Exibição de Formulário</a></li>
            <li role="presentation"><a href="#"><i class='fa fa-wrench'></i> Passo 4 - Configuração</a></li>
        @endif
    </ul>

    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">Informação de Módulo</h3>
        </div>
        <div class="box-body">
            <form method="post" action="{{Route('ModulsControllerPostStep2')}}">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="id" value="{{$row->id}}">
                <div class="form-group">
                    <label for="">Tabela</label>
                    <select name="table" id="table" required class="select2 form-control" value="{{$row->table_name}}">
                        <option value="">{{cbLang('text_prefix_option')}} a Tabela</option>
                        @foreach($tables_list as $table)

                            <option {{($table == $row->table_name)?"selected":""}} value="{{$table}}">{{$table}}</option>

                        @endforeach
                    </select>
                    <div class="help-block">
                        Não use cms_* como prefixo para os nomes das tabelas
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Nome do Módulo</label>
                    <input type="text" class="form-control" required name="name" value="{{$row->name}}">
                </div>

                <div class="form-group">
                    <label for="">Ícone</label>
                    <select name="icon" id="icon" required class="select2 form-control" style="font-family: 'FontAwesome', Helvetica;">
                        @foreach($fontawesome as $f)
                            <option {{($row->icon == 'fa fa-'.$f)?"selected":""}} value="fa fa-{{$f}}" data-label='{{$f}}'>{{$f}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Slug Módulo</label>
                    <input type="text" class="form-control" required name="path" value="{{$row->path}}">
                    <div class="help-block">Somente alfanumérico, usar _ no lugar de espaço</div>
                </div>
        </div>
        <div class="box-footer">

            <input checked type='checkbox' name='create_menu' value='1'/> Criar menu para este modelo <a href='#'
                                                                                                              title='Se você dar check, será criado um modelo para este módulo'>(?)</a>

            <div class='pull-right'>
                <a class='btn btn-default' href='{{Route("ModulsControllerGetIndex")}}'> {{cbLang('button_back')}}</a>
                <input type="submit" class="btn btn-primary" value="Passo 2 &raquo;">
            </div>
        </div>
        </form>
    </div>


@endsection
