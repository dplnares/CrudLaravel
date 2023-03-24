@extends('layouts.plantillaBRecurso')

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
@endsection

@section('contenido')
<h1 class="title">Todos los Recursos</h1>
{{-- Boton para crear un recurso nuevo -> lo redirigo a la vista de create --}}
<a href="recursos/create" class="btn btn-primary mb-3">Agregar Recurso</a>

<table id="recursos" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Codigo Interno</th>
      <th scope="col">Categoria</th>
      <th scope="col">Marca</th>
      <th scope="col">Modelo</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Precio</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach($recursos as $recurso)
      <tr>
        <td>{{$recurso -> id}}</td>
        <td>{{$recurso -> codInterno}}</td>
        <td>{{$recurso -> categoriaRecurso}}</td>
        <td>{{$recurso -> marcaRecurso}}</td>
        <td>{{$recurso -> modeloRecurso}}</td>
        <td>{{$recurso -> descripcionRecurso}}</td>
        <td>{{$recurso -> precioRef}}</td>
        <td>{{$recurso -> cantidadRecurso}}</td>
        <td>
          <form action="{{route('recursos.destroy', $recurso -> id)}}" method="POST">
            @csrf
            @method('DELETE')
            <a href="/recursos/{{ $recurso -> id }}/edit" class="btn btn-info">Editar</a>
            <button class="btn btn-danger">Eliminar</button>
          </form>
          
        </td>
        
      </tr>
    @endforeach
  </tbody>
</table>
@endsection

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

<script>
  $(document).ready(function () {
    $('#recursos').DataTable();
  });
</script>
@endsection