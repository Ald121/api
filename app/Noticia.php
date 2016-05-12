<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    protected $fillable = array('id', 'titulo', 'descripcion','URL','refencia','img');
}
