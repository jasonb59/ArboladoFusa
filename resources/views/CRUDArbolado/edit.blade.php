@extends('adminlte::page')

@section('title', 'CRUD ARBOLADO')

@section('content_header')
    <h1>Editar Registros de la Tabla Arbolado</h1>
@stop

@section('content')

<form action="/origens/{{ $Adato->id }}" method="POST">

    @csrf
    @method('PUT')
         <div class="mb-3">
        <label for="" class="form-label">Localizacion</label>
        <input id="Localizacion" name="Localizacion" type="text" class="form-control" value="{{ $Adato->Localizacion }}">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Este</label>
        <input id="Este" name="Este" type="text" class="form-control" value="{{ $Adato->Este }}">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Norte</label>
        <input id="Norte" name="Norte" type="text" class="form-control" value="{{ $Adato->Norte }}">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Nombre Cientifico</label>
        <input id="Nom_Cientifico" name="Nom_Cientifico" type="text" class="form-control" value="{{ $Adato->Nom_Cientifico }}">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Familia</label>
        <input id="Familia" name="Familia" type="text" class="form-control" value="{{ $Adato->Familia }}">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Nombre Comun</label>
        <input id="Nom_Comun" name="Nom_Comun" type="text" class="form-control"value="{{ $Adato->Nom_Comun }}">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Origen</label>
        <input id="Origen" name="Origen" type="text" class="form-control" value="{{ $Adato->Origen }}">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Econservacion</label>
        <input id="Econservacion" name="Econservacion" type="text" class="form-control" value="{{ $Adato->Econservacion }}">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Habito</label>
        <input id="Habito" name="Habito" type="text" class="form-control" value="{{ $Adato->Habito }}">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Tipo</label>
        <input id="Tipo" name="Tipo" type="text" class="form-control" value="{{ $Adato->Tipo }}">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Sitio</label>
        <input id="Sitio" name="Sitio" type="text" class="form-control" value="{{ $Adato->Sitio }}">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Estado</label>
        <input id="Estado" name="Estado" type="text" class="form-control" value="{{ $Adato->Estado }}">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Raiz</label>
        <input id="Raiz" name="Raiz" type="text" class="form-control" value="{{ $Adato->Raiz }}">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">DAP_m</label>
        <input id="DAP_m" name="DAP_m" type="text" class="form-control" value="{{ $Adato->DAP_m }}">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Alt_Total</label>
        <input id="Alt_Total" name="Alt_Total" type="text" class="form-control" value="{{ $Adato->Alt_Total }}">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Alt_Comercial</label>
        <input id="Alt_Comercial" name="Alt_Comercial" type="text" class="form-control" value="{{ $Adato->Alt_Comercial }}">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Grados</label>
        <input id="Grados" name="Grados" type="text" class="form-control" value="{{ $Adato->Grados }}">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Norte_Sur</label>
        <input id="Norte_Sur" name="Norte_Sur" type="text" class="form-control" value="{{ $Adato->Norte_Sur }}">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Este_Oeste</label>
        <input id="Este_Oeste" name="Este_Oeste" type="text" class="form-control" value="{{ $Adato->Este_Oeste }}">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Ramas Secas</label>
        <input id="Ramas_Secas" name="Ramas_Secas" type="text" class="form-control" value="{{ $Adato->Ramas_Secas }}">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Hongos</label>
        <input id="Hongos" name="Hongos" type="text" class="form-control" value="{{ $Adato->Hongos }}">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Insectos</label>
        <input id="Insectos" name="Insectos" type="text" class="form-control" value="{{ $Adato->Insectos }}">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Nidos</label>
        <input id="Nidos" name="Nidos" type="text" class="form-control" value="{{ $Adato->Nidos }}">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Abejas</label>
        <input id="Abejas" name="Abejas" type="text" class="form-control" value="{{ $Adato->Abejas }}">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Plantas</label>
        <input id="Plantas" name="Plantas" type="text" class="form-control" value="{{ $Adato->Plantas }}">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Epifetas</label>
        <input id="Epifetas" name="Epifetas" type="text" class="form-control" value="{{ $Adato->Epifetas }}">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Moluscos</label>
        <input id="Moluscos" name="Moluscos" type="text" class="form-control" value="{{ $Adato->Moluscos }}">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Tumores</label>
        <input id="Tumores" name="Tumores" type="text" class="form-control" value="{{ $Adato->Tumores }}">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Agallas</label>
        <input id="Agallas" name="Agallas" type="text" class="form-control" value="{{ $Adato->Agallas }}">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Aracnidos</label>
        <input id="Aracnidos" name="Aracnidos" type="text" class="form-control" value="{{ $Adato->Aracnidos }}">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">U_Muestral</label>
        <input id="U_Muestral" name="U_Muestral" type="text" class="form-control" value="{{ $Adato->U_Muestral }}">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Area_Basal</label>
        <input id="Area_Basal" name="Area_Basal" type="text" class="form-control" value="{{ $Adato->Area_Basal }}">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Vol_Total</label>
        <input id="Vol_Total" name="Vol_Total" type="text" class="form-control" value="{{ $Adato->Vol_Total }}">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Vol_Comercial</label>
        <input id="Vol_Comercial" name="Vol_Comercial" type="text" class="form-control" value="{{ $Adato->Vol_Comercial }}">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Bv_t</label>
        <input id="Bv_t" name="Bv_t" type="text" class="form-control" value="{{ $Adato->Bv_t }}">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">BIOM_INDIV_Tn</label>
        <input id="BIOM_INDIV_Tn" name="BIOM_INDIV_Tn" type="text" class="form-control" value="{{ $Adato->BIOM_INDIV_Tn }}">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">CARB_INDIV_Tn</label>
        <input id="CARB_INDIV_Tn" name="CARB_INDIV_Tn" type="text" class="form-control" value="{{ $Adato->CARB_INDIV_Tn }}">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Categ_diame</label>
        <input id="Categ_diame" name="Categ_diame" type="text" class="form-control" value="{{ $Adato->Categ_diame }}">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Estrato</label>
        <input id="Estrato" name="Estrato" type="text" class="form-control"value="{{ $Adato->Estrato }}">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Observaciones</label>
        <input id="Observaciones" name="Observaciones" type="text" class="form-control" value="{{ $Adato->Observaciones }}">
      </div>
      <a href="/origens" class="btn btn-secondary" tabindex="43">Cancelar</a>
      <button type="submit" class="btn btn-primary" tabindex="42">Guardar</button>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop
