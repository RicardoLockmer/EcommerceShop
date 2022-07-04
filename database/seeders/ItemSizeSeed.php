<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSizeSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //MOCHILA
        DB::table('item_sizes')->insert([
            'sku' => 'DTDET-A2-R434',
            'item_id' => 1,
            'color_id' => 1,
            'size' => '44 US',
            'quantity' => 35,
            'precio' => 45000,
            'unique_size_id' => 111661113,
            'created_at' => now()
        ]);
        DB::table('item_sizes')->insert([
            'sku' => 'DTDET-A2-R453',
            'item_id' => 1,
            'color_id' => 1,
            'size' => '45 US',
            'quantity' => 30,
            'precio' => 45000,
            'unique_size_id' => 111155113,
            'created_at' => now()
        ]);
        DB::table('item_sizes')->insert([
            'sku' => 'DTDET-A2-B443',
            'item_id' => 1,
            'color_id' => 2,
            'size' => '44 US',
            'quantity' => 35,
            'precio' => 45000,
            'unique_size_id' => 111111356,
            'created_at' => now()
        ]);
        DB::table('item_sizes')->insert([
            'sku' => 'DTDET-A2-B453',
            'item_id' => 1,
            'color_id' => 2,
            'size' => '45 US',
            'quantity' => 33,
            'precio' => 45000,
            'unique_size_id' => 111111389,
            'created_at' => now()
        ]);
        DB::table('item_sizes')->insert([
            'sku' => 'DTDET-A2-B463',
            'item_id' => 1,
            'color_id' => 2,
            'size' => '46 US',
            'quantity' => 34,
            'precio' => 45000,
            'unique_size_id' => 11111139,
            'created_at' => now()
        ]);
        
        //APPLE WATCH
        DB::table('item_sizes')->insert([
            'sku' => 'DTDET-R1-B463',
            'item_id' => 2,
            'color_id' => 3, // rojo
            'size' => '40 mm',
            'quantity' => 40,
            'precio' => 250000,
            'unique_size_id' => 111111399,
            'created_at' => now()
        ]);
        DB::table('item_sizes')->insert([
            'sku' => 'DTDET-R1-B464',
            'item_id' => 2,
            'color_id' => 3, // rojo
            'size' => '44 mm',
            'quantity' => 40,
            'precio' => 250000,
            'unique_size_id' => 111111314555,
            'created_at' => now()
        ]);
        DB::table('item_sizes')->insert([
            'sku' => 'DTDET-A11-B463',
            'item_id' => 2,
            'color_id' => 4, // Azul
            'size' => '40 mm',
            'quantity' => 40,
            'precio' => 250000,
            'unique_size_id' => 111111374,
            'created_at' => now()
        ]);
        DB::table('item_sizes')->insert([
            'sku' => 'DTDET-A11-B464',
            'item_id' => 2,
            'color_id' => 4, // Azul
            'size' => '44 mm',
            'quantity' => 40,
            'precio' => 250000,
            'unique_size_id' => 11111137,
            'created_at' => now()
        ]);
        DB::table('item_sizes')->insert([
            'sku' => 'DTDET-RS11-B463',
            'item_id' => 2,
            'color_id' => 5, // Rosa
            'size' => '40 mm',
            'quantity' => 40,
            'precio' => 250000,
            'unique_size_id' => 111111345455,
            'created_at' => now()
        ]);
        DB::table('item_sizes')->insert([
            'sku' => 'DTDET-RS11-B464',
            'item_id' => 2,
            'color_id' => 5, // Rosa
            'size' => '44 mm',
            'quantity' => 40,
            'precio' => 250000,
            'unique_size_id' => 111111355,
            'created_at' => now()
        ]);
        DB::table('item_sizes')->insert([
            'sku' => 'DTDET-BL11-B463',
            'item_id' => 2,
            'color_id' => 6, // Blanco
            'size' => '40 mm',
            'quantity' => 40,
            'precio' => 250000,
            'unique_size_id' => 111111344,
            'created_at' => now()
        ]);
        DB::table('item_sizes')->insert([
            'sku' => 'DTDET-BL11-B464',
            'item_id' => 2,
            'color_id' => 6, // Blanco
            'size' => '44 mm',
            'quantity' => 40,
            'precio' => 250000,
            'unique_size_id' => 11111131,
            'created_at' => now()
        ]);
        DB::table('item_sizes')->insert([
            'sku' => 'DTDET-BL121-B464',
            'item_id' => 2,
            'color_id' => 6, // Blanco
            'size' => '48 mm',
            'quantity' => 40,
            'precio' => 260000,
            'unique_size_id' => 11111111,
            'created_at' => now()
        ]);
        
        
    }
}