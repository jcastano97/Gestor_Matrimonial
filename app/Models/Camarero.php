<?php

namespace Gestor_Matrimonial\Models;

use Illuminate\Database\Eloquent\Model;

class Camarero extends Model
{
    protected $table = 'camareros';

    protected $fillable = array(
        'nombre_camarero',
    );
}
