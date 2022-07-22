@extends('adminlte::page')

@section('title', 'CRUD ESTADO DE CONSERVACION')

@section('content_header')
    <h1>Editar registros de Estado de Conservacion</h1>
@stop

@section('content')

<form action="/estd_conservas/{{ $ECdato->id }}" method="POST">

    @csrf
    @method('PUT')


      <div class="mb-3">
        <label for="" class="form-label">NombreOrigen</label>
        <input id="Nom_Econservacion" name="Nom_Econservacion" type="text" class="form-control" value="{{ $ECdato->Nom_Econservacion }}">
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
