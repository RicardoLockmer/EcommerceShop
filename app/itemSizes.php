<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class itemSizes extends Model
{ 
    
    public function colors(){
        return $this->belongsTo(itemColors::class, "color_id", "id");
    }
    public function items(){
        return $this->belongsTo(Items::class, "item_id", "id");
    }
    
    protected $fillables = [
        'item_id',
        'color_id',
        'sku',
        'size',
        'quantity',
        'precio',
        'unique_size_id',
    ];
}
