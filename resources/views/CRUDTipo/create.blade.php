@extends('adminlte::page')

@section('title', 'CRUD TIPO')

@section('content_header')
    <h1>Crear Registros de la Tabla Tipo</h1>
@stop

@section('content')

<form action="/tipos" method="POST">

    @csrf

  <div class="mb-3">
    <label for="" class="form-label">Nombre Tipo</label>
    <input id="Nom_Tipo" name="Nom_Tipo" type="text" class="form-control" tabindex="2">
  </div>
  <a href="/tipos" class="btn btn-secondary" tabindex="4">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="3">Guardar</button>
</form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop
