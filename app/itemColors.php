<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
 
class itemColors extends Model
{
    public function items() {
        return $this->belongsTo(Items::class);
    }
    public function size(){
        return $this->hasMany(itemSizes::class, "item_id");
    }
    

    protected $fillables = [
        'item_id',
        
        'color',
        'colorImages'
    ];
}
