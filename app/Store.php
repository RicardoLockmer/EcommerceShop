<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
class Store extends Model
{
    protected $primaryKey = 'store_id';

    public function items() {
        return $this->hasMany(Items::class, 'store_id', 'store_id');
    }
    public function user(){
        return $this->belongsTo(User::class, 'store_id', 'store_id');
    }
    public function presets(){
        return $this->hasMany(addressPresets::class, 'store_id', 'store_id');
    }
    use Notifiable;
    protected $fillable = [
    'primerNombre',
    'segundoNombre',
    'primerApellido',
    'segundoApellido',
    'email',
    'nombreNegocio',
    'password',
    'cedulaJuridica',
    'direccion',
    'prefix',
    'phoneNumber',
    'tyc',
    'email_verified_at',
    'remember_token',
    'updated_at',
    'created_at',
    'closeDate'
    ];
   
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
