@extends('adminlte::page')

@section('title', 'CRUD HABITO')

@section('content_header')
    <h1>Crear registros de Habito</h1>
@stop

@section('content')

<form action="/habitos" method="POST">

    @csrf

  <div class="mb-3">
    <label for="" class="form-label">Nombre Habito</label>
    <input id="Nom_Habito" name="Nom_Habito" type="text" class="form-control" tabindex="2">
  </div>
  <a href="/habitos" class="btn btn-secondary" tabindex="4">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="3">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop
