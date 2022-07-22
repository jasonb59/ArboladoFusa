@extends('adminlte::page')

@section('title', 'CRUD RAIZ')

@section('content_header')
    <h1>Tabla de Registros de Raiz</h1>
@stop

@section('content')
<a href="raizs/create" class="btn btn-primary mb-3">CREAR</a>

<table id="raizs" class="table table-dark table-striped mt-4" style="width:100%">
<thead class="bg-primary text-white">
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
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script>
$(document).ready(function () {
    $('#raizs').DataTable({
        "lengthMenu":[[5, 10, 50,-1],[5,10,50,"All"]]
});
});
</script>
@stop
