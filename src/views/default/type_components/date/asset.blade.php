@push('bottom')

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

    </script>
@endpush