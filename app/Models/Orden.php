<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orden extends Model
{
    protected $table = 'ordenes';
    protected $guarded = [];

    public function documentos()
    {
        return $this->hasMany('App\Models\Documento','orden_id');
    }
    public function servicios()
    {
        //return $this->belongToMany('App\Models\Servicio','orden_servicios');
        return $this->hasMany('App\Models\Servicio','orden_id');
    }

    public function cliente()
    {
        return $this->belongsTo('App\User','cliente_id');
    }

    public function categoria()
    {
        return $this->belongsTo('App\Models\Categoria','categoria_id');
    }

    public function checklists()
    {
        return $this->hasMany('App\Models\Checklist','orden_id');
    }
}
