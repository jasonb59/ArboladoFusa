@extends('layouts.PlantillaBaseEstdConserva');

@section('contenido')

<a href="estd_conservas/create" class="btn btn-primary">CREAR</a>
<table class="table table-dark table-striped mt-4">
<thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Nom_Econservacion</th>
        <th scope="col">Acciones</th>
    </tr>
</thead>
<tbody>
    @foreach ($ECdatos as $ECdato )
        <tr>
            <td>{{ $ECdato->id }}</td>
            <td>{{ $ECdato->Nom_Econservacion }}</td>
            <td>
                <form action="{{ route ('estd_conservas.destroy',$ECdato->id) }}" method="POST">
                <a href="/estd_conservas/{{ $ECdato->id }}/edit" class="btn btn-info">Editar</a>
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
