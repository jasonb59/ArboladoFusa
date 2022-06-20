@extends('layouts.PlantillaBaseEstado');

@section('contenido')
<h2>Editar registros tabla Estado</h2>

<form action="/raizs/{{ $Rdato->id }}" method="POST">

    @csrf
    @method('PUT')

      <div class="mb-3">
        <label for="" class="form-label">Id</label>
        <input id="id" name="id" type="text" class="form-control" value="{{ $Rdato->id }}">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">NombreOrigen</label>
        <input id="Nom_Raiz" name="Nom_Raiz" type="text" class="form-control" value="{{ $Rdato->Nom_Raiz }}">
      </div>
      <a href="/raizs" class="btn btn-secondary" tabindex="4">Cancelar</a>
      <button type="submit" class="btn btn-primary" tabindex="3">Guardar</button>
    </form>
@endsection

