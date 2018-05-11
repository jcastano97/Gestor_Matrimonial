<?php

namespace Gestor_Matrimonial\Models;

use Illuminate\Database\Eloquent\Model;

class Invitado extends Model
{
    protected $table = 'invitados';

    protected $fillable = array(
        'cedula', 'nombre_invitado', 'direccion_invitado', 'id_mesa', 'id_invitador'
    );
}
