<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
	protected $table = 'preguntas';

    protected $guarded = [];

    public function servicio()
    {
    	$this->belongsTo('App\Models\Servicio','servicio_id');
    }
}
