@extends('adminlte::page')

@section('title', 'CRUD ESTADO DE CONSERVACION')

@section('content_header')
    <h1>Crear Registros de tabla Estado de Conservacion</h1>
@stop

@section('content')

<form action="/estd_conservas" method="POST">

    @csrf
  <div class="mb-3">
    <label for="" class="form-label">Id</label>
    <input id="id" name="id" type="text" class="form-control" tabindex="1">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Nombre estado de Conservacion</label>
    <input id="Nom_Econservacion" name="Nom_Econservacion" type="text" class="form-control" tabindex="2">
  </div>
  <a href="/estd_conservas" class="btn btn-secondary" tabindex="4">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="3">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop
