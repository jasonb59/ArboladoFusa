@extends('layouts.PlantillaBaseSitio');

@section('contenido')

<a href="sitios/create" class="btn btn-primary">CREAR</a>
<table class="table table-dark table-striped mt-4">
<thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">NombreSitio</th>
        <th scope="col">Acciones</th>
    </tr>
</thead>
<tbody>
    @foreach ($Sdatos as $Sdato )
        <tr>
            <td>{{ $Sdato->id }}</td>
            <td>{{ $Sdato->Nom_Sitio}}</td>
            <td>

                <form action="{{ route ('sitios.destroy',$Sdato->id) }}" method="POST">
                    <a href="/sitios/{{ $Sdato->id }}/edit" class="btn btn-info">Editar</a>
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
