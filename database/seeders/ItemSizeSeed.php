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
        for($i = 1; $i < 10; $i++){

            DB::table('item_sizes')->insert([
                'sku' => 'DTDET-A2-R434'.$i,
                'item_id' => $i,
                'color_id' => $i,
                'size' => '44 US',
                'quantity' => 35,
                'unique_size_id' => 1111113,
                'precio' => 45000,
                'created_at' => now()
            ]);
            DB::table('item_sizes')->insert([
                'sku' => 'DTDET-A2-R453'.$i,
                'item_id' => $i,
                'color_id' => $i,
                'size' => '45 US',
                'quantity' => 30,
                'unique_size_id' => 1111114,
                'precio' => 45000,
                'created_at' => now()
            ]);
            DB::table('item_sizes')->insert([
                'sku' => 'DTDET-A2-B443'.$i,
                'item_id' => $i,
                'color_id' => $i,
                'size' => '44 US',
                'quantity' => 35,
                'unique_size_id' => 1111115,
                'precio' => 45000,
                'created_at' => now()
            ]);
            DB::table('item_sizes')->insert([
                'sku' => 'DTDET-A2-B453'.$i,
                'item_id' => $i,
                'color_id' => $i,
                'size' => '45 US',
                'quantity' => 33,
                'unique_size_id' => 1111116,
                'precio' => 45000,
                'created_at' => now()
            ]);
            DB::table('item_sizes')->insert([
                'sku' => 'DTDET-A2-B463'.$i,
                'item_id' => $i,
                'color_id' => $i,
                'size' => '46 US',
                'quantity' => 34,
                'unique_size_id' => 1111117,
                'precio' => 45000,
                'created_at' => now()
            ]);
        }
        
        //APPLE WATCH
        $color_id = 10;
        for($i = 10; $i < 18; $i++){
            DB::table('item_sizes')->insert([
                'sku' => 'DTDET-R1-B463'.now(),
                'item_id' => $i,
                'color_id' => $i, // rojo
                'size' => '40 mm',
                'quantity' => 40,
                'unique_size_id' => 1111118,
                'precio' => 250000,
                'created_at' => now()
            ]);
            DB::table('item_sizes')->insert([
                'sku' => 'DTDET-R1-B464'.now(),
                'item_id' => $i,
                'color_id' => $i, // rojo
                'size' => '44 mm',
                'quantity' => 40,
                'unique_size_id' => 1111119,
                'precio' => 250000,
                'created_at' => now()
            ]);
            DB::table('item_sizes')->insert([
                'sku' => 'DTDET-A11-B463'.now(),
                'item_id' => $i,
                'color_id' => $i, // Azul
                'size' => '40 mm',
                'quantity' => 40,
                'unique_size_id' => 11111101,
                'precio' => 250000,
                'created_at' => now()
            ]);
            DB::table('item_sizes')->insert([
                'sku' => 'DTDET-A11-B464'.now(),
                'item_id' => $i,
                'color_id' => $i, // Azul
                'size' => '44 mm',
                'quantity' => 40,
                'unique_size_id' => 11111102,
                'precio' => 250000,
                'created_at' => now()
            ]);
            DB::table('item_sizes')->insert([
                'sku' => 'DTDET-RS11-B463'.now(),
                'item_id' => $i,
                'color_id' => $i, // Rosa
                'size' => '40 mm',
                'quantity' => 40,
                'unique_size_id' => 11111103,
                'precio' => 250000,
                'created_at' => now()
            ]);
            DB::table('item_sizes')->insert([
                'sku' => 'DTDET-RS11-B464'.now(),
                'item_id' => $i,
                'color_id' => $i, // Rosa
                'size' => '44 mm',
                'quantity' => 40,
                'unique_size_id' => 11111104,
                'precio' => 250000,
                'created_at' => now()
            ]);
            DB::table('item_sizes')->insert([
                'sku' => 'DTDET-BL11-B463'.now(),
                'item_id' => $i,
                'color_id' => $i, // Blanco
                'size' => '40 mm',
                'quantity' => 40,
                'unique_size_id' => 11111105,
                'precio' => 250000,
                'created_at' => now()
            ]);
            DB::table('item_sizes')->insert([
                'sku' => 'DTDET-BL11-B464'.now(),
                'item_id' => $i,
                'color_id' => $i, // Blanco
                'size' => '44 mm',
                'quantity' => 40,
                'unique_size_id' => 11111106,
                'precio' => 250000,
                'created_at' => now()
            ]);
            DB::table('item_sizes')->insert([
                'sku' => 'DTDET-BL121-B464'.now(),
                'item_id' => $i,
                'color_id' => $i, // Blanco
                'size' => '48 mm',
                'quantity' => 40,
                'unique_size_id' => 11111107,
                'precio' => 260000,
                'created_at' => now()
            ]);
            $color_id++;
        }
        
    }
}
