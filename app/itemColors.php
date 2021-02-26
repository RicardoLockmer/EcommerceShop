<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
 
class itemColors extends Model
{
    public function items() {
        return $this->belongsTo(Items::class, 'item_id', 'id');
    }
    public function size(){
        return $this->hasMany(itemSizes::class, 'color_id', 'id');
    } 
    

    protected $fillables = [
        'item_id',
        'specs',
        'color',
        'colorImages'
    ];
}
