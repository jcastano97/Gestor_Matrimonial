<?php

namespace Gestor_Matrimonial\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = array(
        'id_category', 'name', 'description', 'price', 'imageURL'
    );
}
