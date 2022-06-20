@extends('layouts.plantillaBaseOrigen');

@section('contenido')
<h2>Editar registros de Origen</h2>

<form action="/origens/{{ $Odato->id }}" method="POST">

    @csrf
    @method('PUT')

      <div class="mb-3">
        <label for="" class="form-label">Id</label>
        <input id="id" name="id" type="text" class="form-control" value="{{ $Odato->id }}">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">NombreOrigen</label>
        <input id="Nom_Origen" name="Nom_Origen" type="text" class="form-control" value="{{ $Odato->Nom_Origen }}">
      </div>
      <a href="/origens" class="btn btn-secondary" tabindex="4">Cancelar</a>
      <button type="submit" class="btn btn-primary" tabindex="3">Guardar</button>
    </form>
@endsection
