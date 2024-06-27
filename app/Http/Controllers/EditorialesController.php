<?php

namespace App\Http\Controllers;

use App\Models\Editorial;
use App\Http\Requests\EditorialesRequest;
use App\Http\Requests\EditorialesEditRequest;

class EditorialesController extends Controller
{

    public function index()
    {
        $editoriales = Editorial::orderBy('nombre')->get();

        return view('editoriales.index',compact('editoriales'));
    }

    public function store(EditorialesRequest $request){

        $editorial = new Editorial();
        $editorial->nombre = $request->nombre;
        $editorial->save();
        return redirect()->route('editoriales.index');
    }

    public function destroy(Editorial $editorial)
    {
        $editorial->delete();
        return redirect()->route('editoriales.index');
    }

    public function edit(Editorial $editorial){
        return view('editoriales.edit',compact('editorial'));
    }

    public function update(Editorial $editorial, EditorialesEditRequest $request){
        $editorial->nombre = $request->nombre;
        $editorial->save();
        return redirect()->route('editoriales.index');
    }

}
