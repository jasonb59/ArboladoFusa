@extends('adminlte::page')

@section('title', 'CRUD TIPO')

@section('content_header')
    <h1>Editar registros de Tipo</h1>
@stop

@section('content')
<form action="/tipos/{{ $Tdato->id }}" method="POST">

    @csrf
    @method('PUT')

      <div class="mb-3">
        <label for="" class="form-label">Id</label>
        <input id="id" name="id" type="text" class="form-control" value="{{ $Tdato->id }}">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">NombreTipo</label>
        <input id="Nom_Tipo" name="Nom_Tipo" type="text" class="form-control" value="{{ $Tdato->Nom_Tipo }}">
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
