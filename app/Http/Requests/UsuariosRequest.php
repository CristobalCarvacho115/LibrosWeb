<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuariosRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [

            'email'=>'required|unique:usuarios,email|max:50',
            'password'=>'required|min:8|max:20',
            'nombre'=>'required|min:3|max:50',
            'rol_id'=>'required|numeric'
        ];
    }

    public function messages(){
        return [
            'email.required' =>'Indique email del usuario',
            'email.unique' =>'El email ya existe',
            'email.max' =>'el máximo de carácteres para el email es de 50',
            'password.required'=>'Indique contraseña del usuario',
            'password.min' =>'El mínimo de carácteres para la contraseña es de 8',
            'password.max' =>'El máximo de carácteres para la contraseña es de 20',
            'nombre.required' => 'Indique el nombre del usuario',
            'nombre.min'      => 'El mínimo de carácteres para el nombre es de 3',
            'nombre.max'      => 'El máximo de cárácteres para el nombre es de 50',
            'rol_id.required' => 'Indique rol de usuario'
        ];
    }
}
