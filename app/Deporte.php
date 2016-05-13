<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deporte extends Model
{
    protected $table='deportes';
    protected $fillable = ['id_deporte', 'titulo', 'descripcion','URL','refencia','img','estado'];
}
