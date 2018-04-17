<?php

namespace Gestor_Matrimonial\Models;

use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
{
    protected $table = 'mesas';

    protected $fillable = array(
        'numero_mesa', 'capacidad_mesa', 'id_sala'
    );
}
