@extends('adminlte::page')

@section('title', 'CRUD ARBOLADO')

@section('content_header')
    <h1>Registros tabla Arbolado</h1>
@stop

@section('content')

<a href="arbolados/create" class="btn btn-primary mb-3">CREAR</a>

<table id="arbolados" class="table table-dark table-striped table-bordered shadow-lg mt-4" style="width:100%">
<thead class="bg-primary text-white">
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Localizacion</th>
        <th scope="col">Este</th>
        <th scope="col">Norte</th>
        <th scope="col">Nom_Cientifico</th>
        <th scope="col">Familia</th>
        <th scope="col">Nombre Comun</th>
        <th scope="col">Origen</th>
        <th scope="col">Econservacion</th>
        <th scope="col">Habito</th>
        <th scope="col">Tipo</th>
        <th scope="col">Sitio</th>
        <th scope="col">Estado</th>
        <th scope="col">Raiz</th>
        <th scope="col">DAP_m</th>
        <th scope="col">Alt_Total</th>
        <th scope="col">Alt_Comercial</th>
        <th scope="col">Grados</th>
        <th scope="col">Norte_Sur</th>
        <th scope="col">Este_Oeste</th>
        <th scope="col">RamasSecas</th>
        <th scope="col">Hongos</th>
        <th scope="col">Insectos</th>
        <th scope="col">Nidos</th>
        <th scope="col">Abejas</th>
        <th scope="col">Plantas</th>
        <th scope="col">Epifetas</th>
        <th scope="col">Moluscos</th>
        <th scope="col">Tumores</th>
        <th scope="col">Agallas</th>
        <th scope="col">Aracnidos</th>
        <th scope="col">U_Muestral</th>
        <th scope="col">Area_Basal</th>
        <th scope="col">Vol_Total</th>
        <th scope="col">Vol_Comercial</th>
        <th scope="col">Bv_t</th>
        <th scope="col">BIOM_INDIV_Tn</th>
        <th scope="col">CARB_INDIV_Tn</th>
        <th scope="col">Categ_diame</th>
        <th scope="col">Estrato</th>
        <th scope="col">Observaciones</th>
        <th scope="col">Acciones</th>
    </tr>
</thead>
<tbody>
    @foreach ($arbolados as $Adato )
        <tr>
            <td>{{ $Adato->id }}</td>
            <td>{{ $Adato->Localizacion }}</td>
            <td>{{ $Adato->Este }}</td>
            <td>{{ $Adato->Norte }}</td>
            <td>{{ $Adato->Nom_Cientifico }}</td>
            <td>{{ $Adato->Familia }}</td>
            <td>{{ $Adato->Nom_Comun }}</td>
            <td>{{ $Adato->Nom_Origen}}</td>
            <td>{{ $Adato->Nom_Econservacion}}</td>
            <td>{{ $Adato->Nom_Habito }}</td>
            <td>{{ $Adato->Nom_Tipo }}</td>
            <td>{{ $Adato->Nom_Sitio }}</td>
            <td>{{ $Adato->Nom_Estado }}</td>
            <td>{{ $Adato->Nom_Raiz }}</td>
            <td>{{ $Adato->DAP_m }}</td>
            <td>{{ $Adato->Alt_Total }}</td>
            <td>{{ $Adato->Alt_Comercial }}</td>
            <td>{{ $Adato->Grados }}</td>
            <td>{{ $Adato->Norte_Sur }}</td>
            <td>{{ $Adato->Este_Oeste }}</td>
            <td>{{ $Adato->Ramas_Secas }}</td>
            <td>{{ $Adato->Hongos }}</td>
            <td>{{ $Adato->Insectos }}</td>
            <td>{{ $Adato->Nidos }}</td>
            <td>{{ $Adato->Abejas }}</td>
            <td>{{ $Adato->Plantas }}</td>
            <td>{{ $Adato->Epifetas }}</td>
            <td>{{ $Adato->Moluscos }}</td>
            <td>{{ $Adato->Tumores }}</td>
            <td>{{ $Adato->Agallas }}</td>
            <td>{{ $Adato->Aracnidos }}</td>
            <td>{{ $Adato->U_Muestral }}</td>
            <td>{{ $Adato->Area_Basal }}</td>
            <td>{{ $Adato->Vol_Total }}</td>
            <td>{{ $Adato->Vol_Comercial }}</td>
            <td>{{ $Adato->Bv_t }}</td>
            <td>{{ $Adato->BIOM_INDIV_Tn }}</td>
            <td>{{ $Adato->CARB_INDIV_Tn }}</td>
            <td>{{ $Adato->Categ_diame }}</td>
            <td>{{ $Adato->Estrato }}</td>
            <td>{{ $Adato->Observaciones }}</td>
            <td>

                <form action="{{ route ('arbolados.destroy',$Adato->id) }}" method="POST">
                    <a href="/arbolados/{{ $Adato->id }}/edit" class="btn btn-info">Editar</a>
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
        $('#arbolados').DataTable({
            "lengthMenu":[[5, 10, 50,-1],[5,10,50,"All"]]
    });
    });
</script>
@stop
