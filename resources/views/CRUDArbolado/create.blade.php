@extends('adminlte::page')

@section('title', 'CRUD ARBOLADO')

@section('content_header')
    <h1>Crear Regisrtros de Tabla Arbolado</h1>
@stop

@section('content')
<form action="/arbolados" method="POST">

    @csrf

  <div class="mb-3">
    <label for="" class="form-label">Localizacion</label>
    <input id="Localizacion" name="Localizacion" type="text" class="form-control" tabindex="2">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Este</label>
    <input id="Este" name="Este" type="text" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Norte</label>
    <input id="Norte" name="Norte" type="text" class="form-control" tabindex="4">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Nombre Cientifico</label>
    <input id="Nom_Cientifico" name="Nom_Cientifico" type="text" class="form-control" tabindex="5">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Familia</label>
    <input id="Familia" name="Familia" type="text" class="form-control" tabindex="6">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Nombre Comun</label>
    <input id="Nom_Comun" name="Nom_Comun" type="text" class="form-control" tabindex="7">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Origen</label>
    <select class="form-control" id="Origen_id" name="Origen_id">
<option value=""> Selecione el Origen</option>
@foreach ($origenes as $origen  )
<option value="{{$origen->id}}">{{$origen->Nom_Origen}}</option>
@endforeach
    </select>
</div>

<div class="mb-3">
    <label for="" class="form-label">Estado de Conservacion</label>
    <select class="form-control" id="Econservacion_id" name="Econservacion_id">
<option value="">Selecione el estado de conservacion</option>
@foreach ($econservacions as $econservacion )
<option value="{{$econservacion->id}}">{{$econservacion->Nom_Econservacion}}</option>
@endforeach
    </select>
</div>

<div class="mb-3">
    <label for="" class="form-label">Habito</label>
    <select class="form-control" id="Habito_id" name="Habito_id">
<option value="">Selecione el Habito</option>
@foreach ($habitos as $habito )
<option value="{{$habito->id}}">{{$habito->Nom_Habito}}</option>
@endforeach
    </select>
</div>

<div class="mb-3">
    <label for="" class="form-label">Tipo</label>
    <select class="form-control" id="Tipo_id" name="Tipo_id">
<option value="">Selecione el tipo</option>
@foreach ($tipos as $tipo )
<option value="{{$tipo->id}}">{{$tipo->Nom_Tipo}}</option>
@endforeach
    </select>
</div>

<div class="mb-3">
    <label for="" class="form-label">Sitio</label>
    <select class="form-control" id="Sitio_id" name="Sitio_id">
<option value="">Selecione el tipo de sitio</option>
@foreach ($sitios as $sitio )
<option value="{{$sitio->id}}">{{$sitio->Nom_Sitio}}</option>
@endforeach
    </select>
</div>

<div class="mb-3">
    <label for="" class="form-label">Estado</label>
    <select class="form-control" id="Estado_id" name="Estado_id">
<option value="">Selecione tipo de Estado</option>
@foreach ($estados as $estado )
<option value="{{$estado->id}}">{{$estado->Nom_Estado}}</option>
@endforeach
    </select>
</div>


<div class="mb-3">
    <label for="" class="form-label">Raiz</label>
    <select class="form-control" id="Raiz_id" name="Raiz_id">
<option value="">Selecione tipo de Raiz</option>
@foreach ($raizs as $raiz )
<option value="{{$raiz->id}}">{{$raiz->Nom_Raiz}}</option>
@endforeach
    </select>
</div>

  <div class="mb-3">
    <label for="" class="form-label">DAP_m</label>
    <input id="DAP_m" name="DAP_m" type="text" class="form-control" tabindex="15">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Altura Total</label>
    <input id="Alt_Total" name="Alt_Total" type="text" class="form-control" tabindex="16">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Altura Comercial</label>
    <input id="Alt_Comercial" name="Alt_Comercial" type="text" class="form-control" tabindex="17">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Grados</label>
    <input id="Grados" name="Grados" type="text" class="form-control" tabindex="18">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Norte_Sur</label>
    <input id="Norte_Sur" name="Norte_Sur" type="text" class="form-control" tabindex="19">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Este_Oeste</label>
    <input id="Este_Oeste" name="Este_Oeste" type="text" class="form-control" tabindex="20">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Ramas Secas</label>
    <input id="Ramas_Secas" name="Ramas_Secas" type="text" class="form-control" tabindex="21">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Hongos</label>
    <input id="Hongos" name="Hongos" type="text" class="form-control" tabindex="22">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Insectos</label>
    <input id="Insectos" name="Insectos" type="text" class="form-control" tabindex="23">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Nidos</label>
    <input id="Nidos" name="Nidos" type="text" class="form-control" tabindex="24">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Abejas</label>
    <input id="Abejas" name="Abejas" type="text" class="form-control" tabindex="25">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Plantas</label>
    <input id="Plantas" name="Plantas" type="text" class="form-control" tabindex="26">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Epifetas</label>
    <input id="Epifetas" name="Epifetas" type="text" class="form-control" tabindex="27">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Moluscos</label>
    <input id="Moluscos" name="Moluscos" type="text" class="form-control" tabindex="28">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Tumores</label>
    <input id="Tumores" name="Tumores" type="text" class="form-control" tabindex="29">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Agallas</label>
    <input id="Agallas" name="Agallas" type="text" class="form-control" tabindex="30">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Aracnidos</label>
    <input id="Aracnidos" name="Aracnidos" type="text" class="form-control" tabindex="31">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Unidad Muestral</label>
    <input id="U_Muestral" name="U_Muestral" type="text" class="form-control" tabindex="32">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Area Basal</label>
    <input id="Area_Basal" name="Area_Basal" type="text" class="form-control" tabindex="33">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Volumen Total</label>
    <input id="Vol_Total" name="Vol_Total" type="text" class="form-control" tabindex="34">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Volumen Comercial</label>
    <input id="Vol_Comercial" name="Vol_Comercial" type="text" class="form-control" tabindex="35">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Bv_t</label>
    <input id="Bv_t" name="Bv_t" type="text" class="form-control" tabindex="36">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">BIOM_INDIV_Tn</label>
    <input id="BIOM_INDIV_Tn" name="BIOM_INDIV_Tn" type="text" class="form-control" tabindex="37">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">CARB_INDIV_Tn</label>
    <input id="CARB_INDIV_Tn" name="CARB_INDIV_Tn" type="text" class="form-control" tabindex="38">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Categ_diame</label>
    <input id="Categ_diame" name="Categ_diame" type="text" class="form-control" tabindex="39">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Estrato</label>
    <input id="Estrato" name="Estrato" type="text" class="form-control" tabindex="40">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Observaciones</label>
    <input id="Observaciones" name="Observaciones" type="text" class="form-control" tabindex="41">
  </div>

  <a href="/arbolados" class="btn btn-secondary" tabindex="43">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="42">Guardar</button>
</form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop
