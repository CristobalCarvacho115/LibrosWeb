<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UsuarioB extends Model
{
    use HasFactory,SoftDeletes;
    //Manejo de la tabla
    protected $table = 'usuarios';
    //Un usuario iiene un rol
    public function rol(){
        return $this->belongsTo('App\Models\Rol');
    }
}
