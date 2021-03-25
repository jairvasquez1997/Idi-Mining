@if(!empty($personas))
    @foreach($personas as $i => $persona)
        <tr>
            <td>{{ $i+1 }}</td>
            <td>{{ $persona->disco->nombre }}</td>
            <td>{{ $persona->nombres_apellidos }}</td>
            <td>{{ $persona->fecha_nacimiento }}</td>
            <td>{{ $persona->correo }}</td>
            <td>{{ $persona->celular }}</td>
        </tr>
    @endforeach

@else
    <tr class="odd">
        <td valign="top" colspan="6" class="dataTables_empty">No hay registros</td>
    </tr>
@endif