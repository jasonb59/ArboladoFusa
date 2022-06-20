@extends('layouts.PlantillaBaseEstdConserva');

@section('contenido')
<h1>Crear registros de Estado de Conservacion</h1>

<form action="/estd_conservas" method="POST">

        @csrf
      <div class="mb-3">
        <label for="" class="form-label">Id</label>
        <input id="id" name="id" type="text" class="form-control" tabindex="1">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">NombreEConservacion</label>
        <input id="Nom_Econservacion" name="Nom_Econservacion" type="text" class="form-control" tabindex="2">
      </div>
      <a href="/estd_conservas" class="btn btn-secondary" tabindex="4">Cancelar</a>
      <button type="submit" class="btn btn-primary" tabindex="3">Guardar</button>
    </form>

@endsection
