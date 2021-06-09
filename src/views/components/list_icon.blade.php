<select id='list-icon' class="form-control" name="icon" style="font-family: 'FontAwesome', Helvetica;">
    <option value="">** Selecione um Ícone</option>
    @foreach($fontawesome as $font)
        <option value='fa fa-{{$font}}' {{ ($row->icon == "fa fa-$font")?"selected":"" }} data-label='{{$font}}'>{{$font}}</option>
    @endforeach
</select>