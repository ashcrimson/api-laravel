<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\course;

class Estudiantes extends Model
{
    protected $fillable = ["rut", "name", "lastName", "age"];

    public function course()
    {
        return $this->belongsTo('App\course');
    }
}
