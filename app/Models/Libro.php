<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Libro extends Model
{
    use HasFactory,SoftDeletes;
    //Manejo de la tabla
    protected $table = 'libros';
    //Un libro tiene un genero
    public function genero(){
        return $this->belongsTo('App\Models\Genero');
    }
    //Un libro tiene una editorial
    public function editorial(){
        return $this->belongsTo('App\Models\Editorial');
    }
}
