<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categorias extends Model
{
    protected $fillables = [
        'categorias',
        'user_id',
        'store_name',
        'store_id'
    ];
}
