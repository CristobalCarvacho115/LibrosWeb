<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditorialesEditRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nombre'=>'required|min:3|max:30'
        ];
    }

    public function messages(){
        return [
            'nombre.required' => 'Indique el nombre de la editorial',
            'nombre.min'      => 'El mínimo de carácteres para el nombre es 3',
            'nombre.max'      => 'El máximo de carácteres para el nombre es 30'
        ];
    }
}
