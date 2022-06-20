@extends('layouts.PlantillaBaseTipo');

@section('contenido')
<h2>Crear registros tabla de Tipo</h2>

<form action="/tipos" method="POST">

        @csrf
      <div class="mb-3">
        <label for="" class="form-label">Id</label>
        <input id="id" name="id" type="text" class="form-control" tabindex="1">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">NombreTipo</label>
        <input id="Nom_Tipo" name="Nom_Tipo" type="text" class="form-control" tabindex="2">
      </div>
      <a href="/tipos" class="btn btn-secondary" tabindex="4">Cancelar</a>
      <button type="submit" class="btn btn-primary" tabindex="3">Guardar</button>
    </form>

@endsection
