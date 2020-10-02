<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
 
class itemColors extends Model
{
    public function items() {
        return $this->belongsTo(Items::class,'items_id');
    }
    public function size(){
        return $this->hasMany(itemSize::class, 'color_id');
    }
    public function itemCantidades(){
        return $this->hasMany(itemCantidades::class, 'color_id');
    }
}
