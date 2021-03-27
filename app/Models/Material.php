<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $table = 'materiales';
    protected $guarded = [];

    public function servicios()
    {
        return $this->belongsToMany('App\Models\Servicio');
    }
}
