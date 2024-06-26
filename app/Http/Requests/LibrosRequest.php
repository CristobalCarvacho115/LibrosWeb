<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LibrosRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'titulo.required' => 'Indique el título del equipo'
        ];
    }

    public function messages(){
        return [
            'titulo.required' => 'Indique el título del libro'
        ];
    }
}
