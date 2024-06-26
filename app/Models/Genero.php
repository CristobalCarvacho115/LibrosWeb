<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Genero extends Model
{
    use HasFactory,SoftDeletes;
    //Manejo de la tabla
    protected $table = 'generos';
    //Un genero tiene muchos libros
    public function libros(){
        return $this->hasMany('App\Models\Libro');
    }
}
