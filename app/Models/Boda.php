<?php

namespace Gestor_Matrimonial\Models;

use Illuminate\Database\Eloquent\Model;

class Boda extends Model
{
    protected $table = 'bodas';

    protected $fillable = array(
        'nombre_boda', 'descripcion_boda', 'fecha_boda'
    );
}
