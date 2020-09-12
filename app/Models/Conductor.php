<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Conductor extends Model
{
    protected $table = 'conductores';
    protected $guarded = [];

    public function cliente()
    {
        return $this->belongsTo('App\User','cliente_id');
    }
}
