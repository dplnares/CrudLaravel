@extends('layouts.plantillaBRecurso')

@section('contenido')
<h2>Crear Recurso</h2>
<form action="/recursos" method="POST">
  {{-- Si no se coloca csrf, se considera sin autorizacion y no deja enviar el formulario--}}
  @csrf
  <div class="mb-3">
    <label for="form-label">Codigo Interno</label>
    <input type="text" class="form-control" name="codigo" id="codigo">
  </div>
  <div class="mb-3">
    <label for="form-label">Categoria</label>
    <input type="text" class="form-control" name="categoria" id="categoria">
  </div>
  <div class="mb-3">
    <label for="form-label">Marca</label>
    <input type="text" class="form-control" name="marca" id="marca">
  </div>
  <div class="mb-3">
    <label for="form-label">Modelo</label>
    <input type="text" class="form-control" name="modelo" id="modelo">
  </div>
  <div class="mb-3">
    <label for="form-label">Descripcion</label>
    <input type="text" class="form-control" name="descripcion" id="descripcion">
  </div>
  <div class="mb-3">
    <label for="form-label">Precio Referencial</label>
    <input type="number" step="any" class="form-control" name="precio" id="precio">
  </div>
  <div class="mb-3">
    <label for="form-label">Cantidad</label>
    <input type="text" class="form-control" name="cantidad" id="cantidad">
  </div>
  <a href="/recursos" class="btn btn-danger">Cancelar</a>
  <button class="btn btn-success" type="submit">Guardar</button>
</form>
@endsection