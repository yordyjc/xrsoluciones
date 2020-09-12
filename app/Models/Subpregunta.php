<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subpregunta extends Model
{
    protected $table = 'subpregunta';

    protected $guarded = [];

    public function servicio()
    {
    	$this->belongsTo('App\Models\Pregunta','pregunta_id');
    }
}
