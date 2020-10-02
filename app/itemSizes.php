<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class itemSizes extends Model
{ 
    
    public function color(){
        return $this->belongsTo(itemColors::class);
    }
    public function items(){
        return $this->belongsTo(Items::class);
    }
}
