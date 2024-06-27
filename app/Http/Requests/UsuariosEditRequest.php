<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuariosEditRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [

            'email'=>'required|max:50',
            'nombre'=>'required|min:3|max:50',
            'rol_id'=>'required|numeric'
        ];
    }

    public function messages(){
        return [
            'email.required' =>'Indique email del usuario',
            'email.max' =>'el máximo de carácteres para el email es de 50',

            'nombre.required' => 'Indique el nombre del usuario',
            'nombre.min'      => 'El mínimo de carácteres para el nombre es de 3',
            'nombre.max'      => 'El máximo de cárácteres para el nombre es de 50',

            'rol_id.required' => 'Indique rol de usuario'
        ];
    }
}
