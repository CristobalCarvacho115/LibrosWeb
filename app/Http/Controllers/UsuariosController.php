<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\UsuarioB;
use App\Models\Rol;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UsuariosRequest;
use App\Http\Requests\UsuariosEditRequest;
class UsuariosController extends Controller
{

    public function index()
    {
        $usuarios = UsuarioB::all();
        $roles    = Rol::all();
        return view('usuarios.index',compact('usuarios','roles'));
    }

    public function store(UsuariosRequest $request){
        $usuario = new UsuarioB();
        $usuario->email    = $request->email;
        $usuario->password = Hash::make($request->password);
        $usuario->nombre   = $request->nombre;
        $usuario->rol_id   = $request->rol_id;
        $usuario->save();
        return redirect()->route('usuarios.index');
    }

    public function destroy(UsuarioB $usuario)
    {
        $usuario->delete();
        return redirect()->route('usuarios.index');
    }

    public function edit(Usuario $usuario)
    {
        $roles = Rol::all();
        return view('usuarios.edit',compact('usuario','roles'));
    }

    public function update(Usuario $usuario, UsuariosEditRequest $request){
        $usuario->email    = $request->email;
        $usuario->nombre   = $request->nombre;
        $usuario->rol_id   = $request->rol_id;
        $usuario->save();
        return redirect()->route('usuarios.index');
    }


    public function login(Request $request){

        Auth::logout();

        $credenciales = [
            'email'=>$request->email,
            'password' =>$request->password,
        ];

        if (Auth::attempt($credenciales)){
            $request->session()->regenerate();
            return redirect()->route('home.index');
        }else{
            return back()->withErrors('Email o contraseña incorrecta');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('home.login');
    }
}
