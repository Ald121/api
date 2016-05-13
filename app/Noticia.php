<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Noticia extends Model
{
	//use SoftDeletes;
	protected $table='noticias';
    protected $fillable = ['id', 'titulo', 'descripcion','URL','refencia','img','estado'];
    //protected $date = ['deleted_at'];
}
