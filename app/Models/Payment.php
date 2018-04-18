<?php

namespace Gestor_Matrimonial\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payment';

    protected $fillable = array(
        'id_user', 'reference_pay', 'accept_pay', 'value_pay'
    );
}
