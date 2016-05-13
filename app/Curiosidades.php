<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curiosidades extends Model
{
        protected $table='curiosidades';
    protected $fillable = ['id_curiosidades', 'titulo', 'descripcion','URL','refencia','img','estado'];
}
