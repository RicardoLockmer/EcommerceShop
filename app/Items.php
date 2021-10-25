<?php

namespace App;
  
use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    public function colors() {
        return $this->hasMany(itemColors::class, 'item_id', 'id');
    }
    public function sizes(){
        return $this->hasMany(itemSizes::class, 'item_id', 'id');
    }
    public function shippings(){
        return $this->hasMany(Shipping::class, 'items_id');
    }
    // public function shipping(){
    //     return $this->hasMany(Shipping::class, 'items_id')->select(['provincia']);
    // }
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
                'keyFeatures',
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
