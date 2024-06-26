<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;
    //Manejo de la tabla
    protected $table = 'roles';
    //Un rol tiene muchos usuarios
    public function usuarios(){
        return $this->hasMany('App\Models\Usuario');
    }
}
