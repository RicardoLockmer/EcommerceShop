<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShippingSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("shippings")->insert([
            'created_at' => now(),
            'items_id' => 1,
            'empresa' => 'Correos de Costa Rica',
            'provincia' => 'San José',
            'precioEnvio' => 0,
            'tiempoEntrega' => 2,
        ]);
        DB::table("shippings")->insert([
            'created_at' => now(),
            'items_id' => 1,
            'empresa' => 'Correos de Costa Rica',
            'provincia' => 'Alajuela',
            'precioEnvio' => 0,
            'tiempoEntrega' => 3,
        ]);
        DB::table("shippings")->insert([
            'created_at' => now(),
            'items_id' => 1,
            'empresa' => 'Correos de Costa Rica',
            'provincia' => 'Cartago',
            'precioEnvio' => 0,
            'tiempoEntrega' => 3,
        ]);
        DB::table("shippings")->insert([
            'created_at' => now(),
            'items_id' => 1,
            'empresa' => 'Correos de Costa Rica',
            'provincia' => 'Heredia',
            'precioEnvio' => 0,
            'tiempoEntrega' => 3,
        ]);
        DB::table("shippings")->insert([
            'created_at' => now(),
            'items_id' => 1,
            'empresa' => 'Correos de Costa Rica',
            'provincia' => 'Guanacaste',
            'precioEnvio' => 0,
            'tiempoEntrega' => 4,
        ]);
        DB::table("shippings")->insert([
            'created_at' => now(),
            'items_id' => 1,
            'empresa' => 'Correos de Costa Rica',
            'provincia' => 'Puntarenas',
            'precioEnvio' => 0,
            'tiempoEntrega' => 4,
        ]);
        DB::table("shippings")->insert([
            'created_at' => now(),
            'items_id' => 1,
            'empresa' => 'Correos de Costa Rica',
            'provincia' => 'Limón',
            'precioEnvio' => 0,
            'tiempoEntrega' => 4,
        ]);
    }
}
