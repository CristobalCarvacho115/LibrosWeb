<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LibrosEditRequest extends FormRequest
{
    public function rules(): array
    {
        return [

            'titulo'=>'required|max:50',
            'autor'=>'required|max:50',
            'genero_id'=>'required|numeric',
            'editorial_id'=>'required|numeric',
            'stock'=>'required|numeric|max:999999',
            'precio'=>'required|numeric|max:9999999',
        ];
    }

    public function messages(){
        return [

            'titulo.required' =>'Indique un título para el libro',
            'titulo.max' =>'el máximo de carácteres para el libro es de 50',

            'autor.required'=>'Indique autor del libro',
            'autor.max' =>'el máximo de carácteres para el autor es de 50',

            'genero_id.required'=>'Indique el género del libro',
            'editorial_id.required'=>'Indique la editorial del libro',

            'stock.required' => 'Indique el stock del libro',
            'stock.numeric' => 'El stock debe ser un número',
            'stock.max' => 'El máximo de stock es de 999.999',

            'precio.required' => 'Indique el precio del libro',
            'precio.numeric' => 'El precio debe ser un número',
            'precio.max' => 'El precio máximo es de 9.999.999'
        ];
    }
}
