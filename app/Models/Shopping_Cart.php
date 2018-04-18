<?php

namespace Gestor_Matrimonial\Models;

use Illuminate\Database\Eloquent\Model;

class Shopping_Cart extends Model
{
    protected $table = 'shopping_cart';

    protected $fillable = array(
        'id_user', 'id_product', 'id_pay'
    );
}
