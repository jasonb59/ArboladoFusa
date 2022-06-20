@extends('layouts.plantillaBaseOrigen');

@section('contenido')
<h2>Crear registros tabla de Origen</h2>

<form action="/origens" method="POST">

        @csrf
      <div class="mb-3">
        <label for="" class="form-label">Id</label>
        <input id="id" name="id" type="text" class="form-control" tabindex="1">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">NombreOrigen</label>
        <input id="Nom_Origen" name="Nom_Origen" type="text" class="form-control" tabindex="2">
      </div>
      <a href="/origens" class="btn btn-secondary" tabindex="4">Cancelar</a>
      <button type="submit" class="btn btn-primary" tabindex="3">Guardar</button>
    </form>

@endsection
