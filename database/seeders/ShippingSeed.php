<?php
namespace Database\Seeders;
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
        // Mochila
        DB::table("shippings")->insert([
            'created_at' => now(),
            'items_id' => 1,
            'empresa' => 'Correos de Costa Rica',
            'provincia' => 'Tegucigalpa',
            'precioEnvio' => 0,
            'tiempoEntrega' => 2,
        ]);
        DB::table("shippings")->insert([
            'created_at' => now(),
            'items_id' => 1,
            'empresa' => 'Correos de Costa Rica',
            'provincia' => 'San Pedro Sula',
            'precioEnvio' => 90,
            'tiempoEntrega' => 3,
        ]);
        DB::table("shippings")->insert([
            'created_at' => now(),
            'items_id' => 1,
            'empresa' => 'Correos de Costa Rica',
            'provincia' => 'Puerto Cortes',
            'precioEnvio' => 100,
            'tiempoEntrega' => 3,
        ]);
        DB::table("shippings")->insert([
            'created_at' => now(),
            'items_id' => 1,
            'empresa' => 'Correos de Costa Rica',
            'provincia' => 'Siguatepeque',
            'precioEnvio' => 90,
            'tiempoEntrega' => 3,
        ]);
        DB::table("shippings")->insert([
            'created_at' => now(),
            'items_id' => 1,
            'empresa' => 'Correos de Costa Rica',
            'provincia' => 'Comayaguela',
            'precioEnvio' => 35,
            'tiempoEntrega' => 4,
        ]);

        // Watch
        DB::table("shippings")->insert([
            'created_at' => now(),
            'items_id' => 2,
            'empresa' => 'Correos de Costa Rica',
            'provincia' => 'Tegucigalpa',
            'precioEnvio' => 0,
            'tiempoEntrega' => 2,
        ]);
        DB::table("shippings")->insert([
            'created_at' => now(),
            'items_id' => 2,
            'empresa' => 'Correos de Costa Rica',
            'provincia' => 'San Pedro Sula',
            'precioEnvio' => 120,
            'tiempoEntrega' => 3,
        ]);
        
    }
}
