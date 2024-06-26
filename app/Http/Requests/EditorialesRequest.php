<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditorialesRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nombre'=>'required|unique|min:2|max:30'
        ];
    }

    public function messages(){
        return [
            'nombre.required' => 'Indique el nombre de la editorial',
            'nombre.unique'   => 'Editorial ya existente',
            'nombre.min'      => 'El mínimo de carácteres para el nombre es 2',
            'nombre.max'      => 'El máximo de carácteres para el nombre es 30'
        ];
    }
}
