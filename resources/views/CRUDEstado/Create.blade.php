@extends('adminlte::page')

@section('title', 'CRUD ESTADO')

@section('content_header')
    <h1>Crear registros tabla de Estado</h1>
@stop

@section('content')

<form action="/estados" method="POST">

    @csrf

  <div class="mb-3">
    <label for="" class="form-label">Nombre Estado</label>
    <input id="Nom_Estado" name="Nom_Estado" type="text" class="form-control" tabindex="2">
  </div>
  <a href="/estados" class="btn btn-secondary" tabindex="4">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="3">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop
