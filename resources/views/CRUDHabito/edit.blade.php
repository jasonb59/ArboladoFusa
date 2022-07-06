@extends('adminlte::page')

@section('title', 'CRUD HABITO')

@section('content_header')
    <h1>Editar Registros de tabla Habitos</h1>
@stop

@section('content')
<form action="/habitos/{{ $Hdato->id }}"method="POST">
    @csrf
    @method('PUT')

       <div class="mb-3">
           <label for="" class="form-label">id</label>
           <input id="id" name="id" type="text" class="form-control" value="{{ $Hdato->id }}">
       </div>
       <div class="mb-3">
           <label for="" class="form-label">NombreHabito</label>
           <input id="Nom_Habito" name="Nom_Habito" type="text" class="form-control" value="{{ $Hdato->Nom_Habito }}">
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
