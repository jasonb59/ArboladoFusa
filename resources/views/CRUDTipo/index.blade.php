@extends('layouts.PlantillaBaseTipo');

@section('contenido')

<a href="tipos/create" class="btn btn-primary">CREAR</a>
<table class="table table-dark table-striped mt-4">
<thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">NombreTipo</th>
        <th scope="col">Acciones</th>
    </tr>
</thead>
<tbody>
    @foreach ($Tdatos as $Tdato )
        <tr>
            <td>{{ $Tdato->id }}</td>
            <td>{{ $Tdato->Nom_Tipo }}</td>
            <td>
                <form action="{{ route ('tipos.destroy',$Tdato->id) }}" method="POST">
                <a href="/tipos/{{ $Tdato->id }}/edit" class="btn btn-info">Editar</a>
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
