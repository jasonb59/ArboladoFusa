@extends('adminlte::page')

@section('title', 'CRUD ESTADO DE CONSERVACION')

@section('content_header')
    <h1>Registro tabla Estado de Conservacion</h1>
@stop

@section('content')

<a href="estd_conservas/create" class="btn btn-primary mb-3">CREAR</a>

<table id="estd_conservas" class="table table-dark table-striped table-bordered shadow-lg mt-4">
<thead class="bg-primary text-white">
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
    $('#estd_conservas').DataTable({
        "lengthMenu":[[5, 10, 50,-1],[5,10,50,"All"]]
});
});
</script>
@stop
