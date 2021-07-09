<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    public function libros(){
        return $this->hasMany('App\libros');
    }
}
