<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    public function materiales()
    {
        return $this->belongsToMany('App\Models\Material');
    }
}
