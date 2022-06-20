@extends('layouts.PlantillaBaseHabito');

@section('contenido')

<a href="habitos/create" class="btn btn-primary">CREAR</a>
<table class="table table-dark table-striped mt-4">
<thead>
    <tr>
        <th scope="col">id</th>
        <th scope="col">Nom_Habito</th>
        <th scope="col">Acciones</th>
    </tr>
</thead>
<tbody>
    @foreach ($Hdatos as $Hdato )
        <tr>
            <td>{{ $Hdato->id }}</td>
            <td>{{ $Hdato->Nom_Habito }}</td>
            <td>

                <form action="{{ route ('habitos.destroy',$Hdato->id) }}" method="POST">
                    <a href="/habitos/{{ $Hdato->id }}/edit" class="btn btn-info">Editar</a>
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
