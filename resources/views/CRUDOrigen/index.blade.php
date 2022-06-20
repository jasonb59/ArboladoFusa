@extends('layouts.plantillaBaseOrigen');

@section('contenido')

<a href="origens/create" class="btn btn-primary">CREAR</a>
<table class="table table-dark table-striped mt-4">
<thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">NombreOrigen</th>
        <th scope="col">Acciones</th>
    </tr>
</thead>
<tbody>
    @foreach ($Odatos as $Odato )
        <tr>
            <td>{{ $Odato->id }}</td>
            <td>{{ $Odato->Nom_Origen }}</td>
            <td>
                <form action="{{ route ('origens.destroy',$Odato->id) }}" method="POST">
                <a href="/origens/{{ $Odato->id }}/edit" class="btn btn-info">Editar</a>
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
