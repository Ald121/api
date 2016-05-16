<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Farandula extends Model
{
    protected $table='farandula';
    protected $fillable = ['id_farandula', 'titulo', 'descripcion','URL','refencia','img','estado'];
}
