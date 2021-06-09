@push('bottom')
    <script src='<?php echo asset("vendor/crudbooster/assets/select2/dist/js/select2.full.min.js")?>'></script>

    @if (App::getLocale() != 'en')
        <script src="{{ asset ('vendor/crudbooster/assets/adminlte/plugins/datepicker/locales/bootstrap-datepicker.pt-br.js') }}"
                charset="UTF-8"></script>
    @endif
    <script type="text/javascript">
        $(function () {
        	$('.input_date').datepicker({
                format: 'yyyy-mm-dd',
                @if (in_array(App::getLocale(), ['ar', 'fa']))
                rtl: true,
                @endif
                language: 'pt-BR'
            });

            $('.open-datetimepicker').click(function () {
                $(this).next('.input_date').datepicker('show');
            });

        });
        
        //Timepicker
		    if($(".timepicker").length > 0) {
		    	$(".timepicker").timepicker({
			      showInputs: true,
			      showSeconds: true,
			      showMeridian:false
			    });	
		    }
    </script>
@endpush
@push('head')
    <link rel='stylesheet' href='<?php echo asset("vendor/crudbooster/assets/select2/dist/css/select2.min.css")?>'/>
    <style>
        .select2-container--default .select2-selection--single {
            border-radius: 0px !important
        }

        .select2-container .select2-selection--single {
            height: 35px
        }
        .bootstrap-timepicker .dropdown-menu {
            left: 185px !important;
            box-shadow: 0px 0px 20px #aaaaaa;
        }
    </style>
@endpush