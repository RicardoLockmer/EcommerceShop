<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PresetSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = 
            "'empresa':'',
            'provincia': 'Tegucigalpa',
            'precioEnvio': '0',
            'tiempoEntrega': '2'"
        ;
        
        DB::table('address_presets')->insert([
            'created_at' => now(),
            'preset_name' => 'Preset Test',
            'allowed_cities' => $cities,
            'store_id' => 1
        ]);
    }
}
