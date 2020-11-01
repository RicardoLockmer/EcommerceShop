<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class itemSizes extends Model
{ 
    
    public function colors(){
        return $this->hasMany(itemColors::class, "item_id");
    }
    public function items(){
        return $this->belongsTo(Items::class);
    }
    
}
