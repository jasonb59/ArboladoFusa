@extends('adminlte::page')

@section('title', 'CRUD SITIO')

@section('content_header')
    <h1>Registros de la Tabla Sitio</h1>
@stop

@section('content')

<a href="sitios/create" class="btn btn-primary mb-3">CREAR</a>

<table id="sitios" class="table table-dark table-striped table-bordered shadow-lg mt-4" style="width:100%">
<thead class="bg-primary text-white">
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Nombre Sitio</th>
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
    $('#sitios').DataTable({
        "lengthMenu":[[5, 10, 50,-1],[5,10,50,"All"]]
});
});
</script>
@stop
