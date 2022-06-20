@extends('layouts.PlantillaBaseSitio');

@section('contenido')
<h2>Crear registros tabla de sitio</h2>

<form action="/sitios" method="POST">

        @csrf
      <div class="mb-3">
        <label for="" class="form-label">Id</label>
        <input id="id" name="id" type="text" class="form-control" tabindex="1">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Nombre Sitio</label>
        <input id="Nom_Sitio" name="Nom_Sitio" type="text" class="form-control" tabindex="2">
      </div>
      <a href="/sitios" class="btn btn-secondary" tabindex="4">Cancelar</a>
      <button type="submit" class="btn btn-primary" tabindex="3">Guardar</button>
    </form>

@endsection
