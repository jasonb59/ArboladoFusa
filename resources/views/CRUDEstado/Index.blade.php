@extends('layouts.PlantillaBaseEstado');

@section('contenido')

<a href="estados/create" class="btn btn-primary">CREAR</a>
<table class="table table-dark table-striped mt-4">
<thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Nombre Estado</th>
        <th scope="col">Acciones</th>
    </tr>
</thead>
<tbody>
    @foreach ($Esdatos as $Esdato )
        <tr>
            <td>{{ $Esdato->id }}</td>
            <td>{{ $Esdato->Nom_Estado }}</td>
            <td>
                <form action="{{ route ('estados.destroy',$Esdato->id) }}" method="POST">
                    <a href="/estados/{{ $Esdato->id }}/edit" class="btn btn-info">Editar</a>
                   @csrf
                   @method('DELETE')

                    <button type="submit" class="btn btn-danger">Borrar</button>

                    </form>

            </td>
        </tr>
    @endforeach
</tbody>


</table>

@endsection
