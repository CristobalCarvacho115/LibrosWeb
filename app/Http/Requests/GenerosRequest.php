<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GenerosRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nombre'=>'required|unique:posts|max:30'
        ];
    }

    public function messages(){
        return [
            'nombre.required' => 'Indique un género',
            'nombre.unique'   => 'Género ya existente',
            'nombre.min'      => 'El mínimo de carácteres para el género es de 2',
            'nombre.max'      => 'El máximo de cárácteres para el género es de 30'
        ];
    }
}
