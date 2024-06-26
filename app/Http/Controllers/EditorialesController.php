<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Editorial;
use App\Http\Requests\EditorialesRequest;

class EditorialesController extends Controller
{

    public function index()
    {
        $editoriales = Editorial::all();

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

}
