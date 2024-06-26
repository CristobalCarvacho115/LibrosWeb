<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\UsuarioB;
use App\Models\Rol;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsuariosController extends Controller
{

    public function index()
    {
        $usuarios = UsuarioB::all();
        $roles    = Rol::all();
        return view('usuarios.index',compact('usuarios','roles'));
    }

    public function store(Request $request){
        $usuario = new UsuarioB();
        $usuario->email    = $request->email;
        $usuario->password = $request->password;
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

    public function update(){

    }


    public function login(Request $request){
        $credenciales = $request->only('email','password');

        if (Auth::attempt($credenciales)){
            //credenciales correctas
            $usuario = Usuario::where('email',$request->email)->first();
            $usuario->registrarUltimoLogin();
            return redirect()->route('home.index');
        }else{
            //credenciales incorrectas
            return back()->withErrors('Credenciales Incorrectas');
        }
    }

    public function logout(){
        return redirect()->route('home.login');
        Auth::logout();
    }
}
