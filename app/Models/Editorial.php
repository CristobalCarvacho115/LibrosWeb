<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Editorial extends Model
{
    use HasFactory,SoftDeletes;
    //Manejo de la tabla
    protected $table='editoriales';
    //Una editorial tiene muchos libros
    public function usuarios(){
        return $this->hasMany('App\Models\Libro');
    }
}
