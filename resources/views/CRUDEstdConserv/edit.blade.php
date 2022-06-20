@extends('layouts.PlantillaBaseEstdConserva');

@section('contenido')
<h2>Editar registros de Estado de Conservacion</h2>

<form action="/estd_conservas/{{ $ECdato->id }}" method="POST">

    @csrf
    @method('PUT')

      <div class="mb-3">
        <label for="" class="form-label">Id</label>
        <input id="id" name="id" type="text" class="form-control" value="{{ $ECdato->id }}">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">NombreOrigen</label>
        <input id="Nom_Econservacion" name="Nom_Econservacion" type="text" class="form-control" value="{{ $ECdato->Nom_Econservacion }}">
      </div>
      <a href="/estd_conservas" class="btn btn-secondary" tabindex="4">Cancelar</a>
      <button type="submit" class="btn btn-primary" tabindex="3">Guardar</button>
    </form>
@endsection
