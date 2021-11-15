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
            
            'cedulaJuridica' => '0123456789',
            
            'direccion' => 'SEED',
            'prefix' => '+504',
            'phoneNumber' => '85832592',
            'password' => Hash::make('rpineda34'),
            'email' => 'admin@deto.com',
            
            'tyc' => 1,
            'created_at' => now()
        
            

        ]);
    }
}
