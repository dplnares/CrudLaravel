@extends('layouts.plantillaBRecurso')

@section('contenido')
<h2>Editar Recurso</h2>
<form action="/recursos/{{ $recurso -> id }}" method="POST">
  @csrf
  {{-- Se usa el metodo PUT debido a que no se puede usar en la etiqueta HTML, nos ayudará a enviar el formulario para editar --}}
  @method('PUT')
  <div class="mb-3">
    <label for="form-label">Codigo Interno</label>
    <input type="text" class="form-control" name="codigo" id="codigo" value="{{$recurso -> codInterno}}">
  </div>
  <div class="mb-3">
    <label for="form-label">Categoria</label>
    <input type="text" class="form-control" name="categoria" id="categoria" value="{{$recurso -> categoriaRecurso}}">
  </div>
  <div class="mb-3">
    <label for="form-label">Marca</label>
    <input type="text" class="form-control" name="marca" id="marca" value="{{$recurso -> marcaRecurso}}">
  </div>
  <div class="mb-3">
    <label for="form-label">Modelo</label>
    <input type="text" class="form-control" name="modelo" id="modelo" value="{{$recurso -> modeloRecurso}}">
  </div>
  <div class="mb-3">
    <label for="form-label">Descripcion</label>
    <input type="text" class="form-control" name="descripcion" id="descripcion" value="{{$recurso -> descripcionRecurso}}">
  </div>
  <div class="mb-3">
    <label for="form-label">Precio Referencial</label>
    <input type="number" step="any" class="form-control" name="precio" id="precio" value="{{$recurso -> precioRef}}">
  </div>
  <div class="mb-3">
    <label for="form-label">Cantidad</label>
    <input type="text" class="form-control" name="cantidad" id="cantidad" value="{{$recurso -> cantidadRecurso}}">
  </div>
  <a href="/recursos" class="btn btn-danger">Cancelar</a>
  <button class="btn btn-success" type="submit">Editar</button>
</form>
@endsection