<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class StoreSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stores')->insert([
            'nombreNegocio' => 'DetoShop',
            'primerNombre' => 'Admin',
            'primerApellido' => 'Deto',
            'tipoNegocio' => 'Equipaje',
            'cedulaJuridica' => '0123456789',
            'provincia' => 'San José',
            'canton' => 'San José',
            'direccion' => 'NONE',
            'prefix' => '+506',
            'phoneNumber' => '85832592',
            'usuario' => 'ADMIN',
            'email' => 'admin@deto.com',
            'user_id' => 1,
            'tyc' => 1,
            'created_at' => now()
        
            

        ]);
    }
}
