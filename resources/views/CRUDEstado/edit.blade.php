@extends('layouts.PlantillaBaseEstado');

@section('contenido')
<h2>Editar registros tabla de Estado</h2>

<form action="/estados/{{ $Esdato->id }}" method="POST">

    @csrf
    @method('PUT')

      <div class="mb-3">
        <label for="" class="form-label">Id</label>
        <input id="id" name="id" type="text" class="form-control" value="{{ $Esdato->id }}">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">NombreEstado</label>
        <input id="Nom_Estado" name="Nom_Estado" type="text" class="form-control" value="{{ $Esdato->Nom_Estado }}">
      </div>
      <a href="/estados" class="btn btn-secondary" tabindex="4">Cancelar</a>
      <button type="submit" class="btn btn-primary" tabindex="3">Guardar</button>
    </form>
@endsection
