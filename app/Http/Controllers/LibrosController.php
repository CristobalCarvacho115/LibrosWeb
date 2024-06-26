<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LibrosRequest;
use App\Models\Libro;
use App\Models\Genero;
use App\Models\Editorial;

class LibrosController extends Controller
{
    public function index()
    {
        $libros = Libro::orderBy('titulo')->get();
        $editoriales = Editorial::all();
        $generos = Genero::all();
        return view('libros.index',compact('libros','editoriales','generos'));
    }

    public function store(LibrosRequest $request){
        $libro = new Libro();
        $libro->titulo       = $request->titulo;
        $libro->autor        = $request->autor;
        $libro->editorial_id = $request->editorial_id;
        $libro->genero_id    = $request->genero_id;
        $libro->stock        = $request->stock;
        $libro->precio       = $request->precio;
        $libro->save();
        return redirect()->route('libros.index');
    }

    public function destroy(Libro $libro)
    {
        $libro->delete();
        return redirect()->route('libros.index');
    }

    public function edit(Libro $libro)
    {
        return view('libros.edit',compact('libro'));
    }
}
