<?php

namespace Gestor_Matrimonial\Models;

use Illuminate\Database\Eloquent\Model;

class User_Boda extends Model
{
    protected $table = 'relacion_usuarios_bodas';

    protected $fillable = array(
        'id_boda', 'id_usuario', 'cargo'
    );

    public function Boda(){
        return $this->belongsTo('app\Models\Boda', 'id');
    }

    public function User(){
        return $this->belongsTo('app\Models\User', 'id');
    }
}
