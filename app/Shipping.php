<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    public function items(){
        return $this->hasOne(Items::class,'items_id');
    }
    protected $fillable = [
        'items_id',
        'empresa',
        'provincia',
        'restringidos',
        'peso',
        'dimensiones',
        'precioEnvio',
        'tiempoEntrega',
        

    ];
}
