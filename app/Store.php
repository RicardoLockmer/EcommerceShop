<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $primaryKey = 'store_id';
    public function items() {
        return $this->hasMany(Items::class, 'store_id', 'store_id');
    }
    public function colors() {
        return $this->items->hasMany(Items::class);
    }
    public function categoria() {
        return $this->hasMany(categorias::class);
    }
    public function user(){
        return $this->belongsTo(User::class, 'nombreNegocio', 'nombreNegocio');
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
    'cedulaJuridica',
    'provincia',
    'canton',
    'direccion',
    'prefix',
    'phoneNumber',
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
