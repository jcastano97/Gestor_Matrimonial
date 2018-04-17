<?php

namespace Gestor_Matrimonial\Models;

use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    protected $table = 'salas';

    protected $fillable = array(
        'nombre_sala', 'capacidad_sala', 'id_boda'
    );
}
