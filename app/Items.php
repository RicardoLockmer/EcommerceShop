<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    public function shipping(){
        return $this->hasOne(Shipping::class, 'items_id');
    }
    public function store() {
        return $this->belongsTo(Store::class, 'store_id', 'store_id');
    }
    protected $fillable = [
                'nombre' ,
                'descripcion',
                'categoria',
                'subcategoria',
                'precio',
                'size',
                'cantidad',
                'color',
                'marca',
                'Specs',
                'rep',
                'karma',
                'updateDate',
                'store_id',
                'nombreNegocio',
                'user_id',
                'updated_at',
                'created_at',
                'image',
                
    ];
}
