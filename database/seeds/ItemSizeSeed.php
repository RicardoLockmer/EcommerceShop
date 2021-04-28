<?php

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
        DB::table('item_sizes')->insert([
            'sku' => 'DTDET-A2-R434',
            'item_id' => 1,
            'color_id' => 1,
            'size' => '44 US',
            'quantity' => 35,
            'precio' => 45000,
            'created_at' => now()
        ]);
        DB::table('item_sizes')->insert([
            'sku' => 'DTDET-A2-R453',
            'item_id' => 1,
            'color_id' => 1,
            'size' => '45 US',
            'quantity' => 30,
            'precio' => 45000,
            'created_at' => now()
        ]);
        DB::table('item_sizes')->insert([
            'sku' => 'DTDET-A2-B443',
            'item_id' => 1,
            'color_id' => 2,
            'size' => '44 US',
            'quantity' => 35,
            'precio' => 45000,
            'created_at' => now()
        ]);
        DB::table('item_sizes')->insert([
            'sku' => 'DTDET-A2-B453',
            'item_id' => 1,
            'color_id' => 2,
            'size' => '45 US',
            'quantity' => 33,
            'precio' => 45000,
            'created_at' => now()
        ]);
        DB::table('item_sizes')->insert([
            'sku' => 'DTDET-A2-B463',
            'item_id' => 1,
            'color_id' => 2,
            'size' => '46 US',
            'quantity' => 34,
            'precio' => 45000,
            'created_at' => now()
        ]);
        
        
    }
}
