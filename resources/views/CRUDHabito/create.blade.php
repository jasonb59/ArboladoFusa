@extends('layouts.PlantillaBaseHabito');

@section('contenido')
<h2>Crear registros de Habito</h2>

<form action="/habitos" method="POST">

        @csrf
      <div class="mb-3">
        <label for="" class="form-label">id</label>
        <input id="id" name="id" type="text" class="form-control" tabindex="1">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Nombre Habito</label>
        <input id="Nom_Habito" name="Nom_Habito" type="text" class="form-control" tabindex="2">
      </div>
      <a href="/habitos" class="btn btn-secondary" tabindex="4">Cancelar</a>
      <button type="submit" class="btn btn-primary" tabindex="3">Guardar</button>
    </form>

@endsection
