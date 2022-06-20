@extends('layouts.plantillaBaseRaiz');

@section('contenido')

<a href="raizs/create" class="btn btn-primary">CREAR</a>
<table class="table table-dark table-striped mt-4">
<thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Nombre de Raiz</th>
        <th scope="col">Acciones</th>
    </tr>
</thead>
<tbody>
    @foreach ($Rdatos as $Rdato )
        <tr>
            <td>{{ $Rdato->id }}</td>
            <td>{{ $Rdato->Nom_Raiz }}</td>
            <td>

                <form action="{{ route ('raizs.destroy',$Rdato->id) }}" method="POST">
                    <a href="/raizs/{{ $Rdato->id }}/edit" class="btn btn-info">Editar</a>
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
