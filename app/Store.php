<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $primaryKey = 'store_id';
    public function items() {
        return $this->hasMany(Items::class, 'store_id', 'store_id');
    }
    public function categoria() {
        return $this->hasMany(categorias::class);
    }
    protected $fillable = [
    'primerNombre',
    'segundoNombre',
    'primerApellido',
    'segundoApellido',
    'email',
    'nombreNegocio',
    'descripcion',
    'usuario',
    'user_id',
    'tipoNegocio',
    'tyc',
    'email_verified_at',
    'remember_token',
    'rep',
    'karma',
    'updated_at',
    'created_at',
    'closeDate'


    ];
}
