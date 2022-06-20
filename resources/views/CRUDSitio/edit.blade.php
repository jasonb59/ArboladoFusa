@extends('layouts.PlantillaBaseSitio');

@section('contenido')
<h2>Editar registros de tabla Sitio</h2>

<form action="/sitios/{{ $Sdato->id }}" method="POST">

    @csrf
    @method('PUT')

      <div class="mb-3">
        <label for="" class="form-label">Id</label>
        <input id="id" name="id" type="text" class="form-control" value="{{ $Sdato->id }}">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">NombreOrigen</label>
        <input id="Nom_Sitio" name="Nom_Sitio" type="text" class="form-control" value="{{ $Sdato->Nom_Sitio }}">
      </div>
      <a href="/sitios" class="btn btn-secondary" tabindex="4">Cancelar</a>
      <button type="submit" class="btn btn-primary" tabindex="3">Guardar</button>
    </form>
@endsection
