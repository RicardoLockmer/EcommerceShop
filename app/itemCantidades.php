<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class itemCantidades extends Model
{
    public function sizes(){
        return $this->hasOne(itemSizes::class);
    }
}
 
