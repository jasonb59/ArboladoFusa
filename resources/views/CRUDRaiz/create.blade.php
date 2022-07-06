@extends('adminlte::page')

@section('title', 'CRUD RAIZ')

@section('content_header')
    <h1>Crear registros de Raiz</h1>
@stop

@section('content')

<form action="/raizs" method="POST">

    @csrf
  <div class="mb-3">
    <label for="" class="form-label">Id</label>
    <input id="id" name="id" type="text" class="form-control" tabindex="1">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Nombre de Raiz</label>
    <input id="Nom_Raiz" name="Nom_Raiz" type="text" class="form-control" tabindex="2">
  </div>
  <a href="/raizs" class="btn btn-secondary" tabindex="4">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="3">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop
