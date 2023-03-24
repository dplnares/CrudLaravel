<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recurso;

class RecursoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $recursos = Recurso::all();
      //  recurso.index -> se refiere a la carpeta creada en views que se llama recurso. Luego el (recurso, $recurso) se refiere al modelo
      return view('recurso.index')->with('recursos', $recursos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return view('recurso.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      $recursos = new Recurso();
      $recursos -> codInterno = $request -> get('codigo');
      $recursos -> categoriaRecurso = $request -> get('categoria');
      $recursos -> marcaRecurso = $request -> get('marca');
      $recursos -> modeloRecurso = $request -> get('modelo');
      $recursos -> descripcionRecurso = $request -> get('descripcion');
      $recursos -> precioRef = $request -> get('precio');
      $recursos -> cantidadRecurso = $request -> get('cantidad');

      $recursos -> save();

      return redirect('/recursos');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
      //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
      //  Busco el recurso por el id que me pasa la vista de index
      $recurso = Recurso::find($id);
      //  Retorno la vista edit con los valores del recurso buscado
      return view('recurso.edit') -> with('recurso', $recurso);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
      $recurso = Recurso::find($id);
      $recurso -> codInterno = $request -> get('codigo');
      $recurso -> categoriaRecurso = $request -> get('categoria');
      $recurso -> marcaRecurso = $request -> get('marca');
      $recurso -> modeloRecurso = $request -> get('modelo');
      $recurso -> descripcionRecurso = $request -> get('descripcion');
      $recurso -> precioRef = $request -> get('precio');
      $recurso -> cantidadRecurso = $request -> get('cantidad');

      $recurso -> save();

      return redirect('/recursos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
      $recurso = Recurso::find($id);
      $recurso -> delete();
      return redirect('/recursos');
    }
}
