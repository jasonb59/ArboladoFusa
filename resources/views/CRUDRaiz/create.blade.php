@extends('layouts.plantillaBaseRaiz');

@section('contenido')
<h2>Crear registros de Raiz</h2>

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

@endsection
