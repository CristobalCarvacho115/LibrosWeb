<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;


class Authenticate extends Middleware
{
    public function redirecTo($request)
    {
        if(! $request->expectsJson()){
            return route('/');
        }
    }
}