<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class addressPresets extends Model
{
     public function store(){
         return $this->belongsTo(Store::class, 'store_id', 'store_id');
     }

    protected $fillable = [
        'store_id',
        'preset_name',
        'allowed_cities',
    ];
}
