@extends('adminlte::page')

@section('title', 'CRUD ORIGEN')

@section('content_header')
    <h1>Crear registros tabla de Origen</h1>
@stop

@section('content')

<form action="/origens" method="POST">

    @csrf

  <div class="mb-3">
    <label for="" class="form-label">Nombre Origen</label>
    <input id="Nom_Origen" name="Nom_Origen" type="text" class="form-control" tabindex="2">
  </div>
  <a href="/origens" class="btn btn-secondary" tabindex="4">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="3">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop
