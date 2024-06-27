<?php

namespace App\Http\Controllers;


use App\Models\Genero;
use App\Http\Requests\GenerosRequest;
use App\Http\Requests\GenerosEditRequest;

class GenerosController extends Controller
{
    public function index()
    {
        $generos = Genero::orderBy('nombre')->get();
        return view('generos.index',compact('generos'));
    }

    public function store(GenerosRequest $request){
        $genero = new Genero();
        $genero->nombre = $request->nombre;
        $genero->save();
        return redirect()->route('generos.index');
    }

    public function destroy(Genero $genero)
    {
        $genero->delete();
        return redirect()->route('generos.index');
    }

    public function edit(Genero $genero)
    {
        return view('generos.edit',compact('genero'));
    }

    public function update(Genero $genero, GenerosEditRequest $request){
        $genero->nombre = $request->nombre;
        $genero->save();
        return redirect()->route('generos.index');
    }
}
