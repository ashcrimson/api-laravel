<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Estudiantes;

class course extends Model
{
    public function estudiantes() 
    {
        return $this->hasMany('App\Estudiantes');
    }
}
