<?php

namespace Gestor_Matrimonial\Models;

use Illuminate\Database\Eloquent\Model;

class TipoRegalo extends Model
{
    protected $table = 'bodas';

    protected $fillable = array(
        'nombre_tiporegalo',
    );
}
