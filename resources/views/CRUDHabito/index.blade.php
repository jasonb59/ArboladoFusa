@extends('adminlte::page')

@section('title', 'CRUD Habito')

@section('content_header')
    <h1>Registros Tabla Habito</h1>
@stop

@section('content')

<a href="habitos/create" class="btn btn-primary mb-3">CREAR</a>

<table id="habitos" class="table table-dark table-striped table-bordered shadow-lg mt-4">
<thead class="bg-primary text-white">
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
    $('#habitos').DataTable({
        "lengthMenu":[[5, 10, 50,-1],[5,10,50,"All"]]
});
});
</script>
@stop
