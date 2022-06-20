@extends('layouts.PlantillaBaseEstado');

@section('contenido')
<h2>Crear registros tabla de Estado</h2>

<form action="/estados" method="POST">

        @csrf
      <div class="mb-3">
        <label for="" class="form-label">Id</label>
        <input id="id" name="id" type="text" class="form-control" tabindex="1">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Nombre Estado</label>
        <input id="Nom_Estado" name="Nom_Estado" type="text" class="form-control" tabindex="2">
      </div>
      <a href="/estados" class="btn btn-secondary" tabindex="4">Cancelar</a>
      <button type="submit" class="btn btn-primary" tabindex="3">Guardar</button>
    </form>

@endsection
