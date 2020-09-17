<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class direcciones extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }

    protected $fillables = [
            'nombreCompleto',
            'pais',
            'codigoPostal',
            'provincia',
            'canton',
            'dir',
            'prefix',
            'ntel',
            'primary',
            'infoAdicional',
            'updated_at',
            'created_at',
    ];
}
