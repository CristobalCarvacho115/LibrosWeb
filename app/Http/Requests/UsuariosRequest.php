<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuariosRequest extends FormRequest
{

    public function authorize(): bool
    {
        return false;
    }

    public function rules(): array
    {
        return [
            //
        ];
    }

    public function messages(){
        return [
            'nombre.required' => 'Indique el nombre del equipo'
        ];
    }
}
