<?php

namespace Gestor_Matrimonial\Models;

use Illuminate\Database\Eloquent\Model;

class Camarero_Mesa extends Model
{
    protected $table = 'relacion_camarero_mesa';

    protected $fillable = array(
        'id_camarero', 'id_mesa', 'rol'
    );

    public function Camarero(){
        return $this->belongsTo('app\Models\Camarero', 'id');
    }

    public function Mesa(){
        return $this->belongsTo('app\Models\Mesa', 'id');
    }
}
