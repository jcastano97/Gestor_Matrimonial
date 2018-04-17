<?php

namespace Gestor_Matrimonial\Models;

use Illuminate\Database\Eloquent\Model;

class Regalo extends Model
{

    protected $table = 'regalos';

    protected $fillable = array(
        'descripcion_regalo', 'id_invitado',
    );

    public function TipoRegalo(){
        return $this->belongsTo('Gestor_Matrimonial\Models\TipoRegalo', 'id_tiporegalo');
    }
}
