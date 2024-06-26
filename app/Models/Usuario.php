<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticable;
Use DateTime;


class Usuario extends Authenticable
{
    use HasFactory;
    //Manejo de la tabla
    protected $table = 'usuarios';
    //último login
    public function registrarUltimoLogin(){
        $this->ultimo_login = new DateTime('NOW');
        $this->save();
    }
}


