<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemColorSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // MOCHILA
        DB::table('item_colors')->insert([
            'item_id' => 1,
            'colorImages' => '["270421100409DM60888ced5c678.jpg", "270421100409DM60888ced5c0002.jpg"]',
            'link' => 'DetTM2270421DT60888ced5c64d101509',
            'color' => 'Gris',
            'created_at' => now()
        ]);
        DB::table('item_colors')->insert([
            'item_id' => 1,
            'colorImages' => '["270421100409DM60888ced85309.jpg", "270421100409DM60888ced8530902100.jpg"]',
            'link' => 'DetTM2270421DT60888ced851ea101509',
            'color' => 'Gris Oscuro',
            'created_at' => now()
        ]);

        //APPLE WATCH
        DB::table('item_colors')->insert([
            'item_id' => 2,
            'colorImages' => '["red1.jpg", "red2.jpg", "red3.jpg", "red4.jpg", "red5.jpg", "red6.jpg", "red7.jpg"]',
            'link' => 'DetTM2270421DT60888ea5c64d101509',
            'color' => 'Rojo',
            'created_at' => now()
        ]);
        DB::table('item_colors')->insert([
            'item_id' => 2,
            'colorImages' => '["blue1.jpg", "b2.jpg", "b3.jpg", "b4.jpg", "b5.jpg", "b6.jpg"]',
            'link' => 'DetTM2270421DT60888efg5c64d101509',
            'color' => 'Azul',
            'created_at' => now()
        ]);
        DB::table('item_colors')->insert([
            'item_id' => 2,
            'colorImages' => '["p1.jpg", "p2.jpg", "p3.jpg", "p4.jpg", "p5.jpg", "p6.jpg", "p7.jpg"]',
            'link' => 'DetTM2270421DT60888effg5c64d101509',
            'color' => 'Rosa',
            'created_at' => now()
        ]);
        DB::table('item_colors')->insert([
            'item_id' => 2,
            'colorImages' => '["w1.jpg", "w2.jpg", "w3.jpg", "w4.jpg", "w5.jpg", "w6.jpg", "w7.jpg"]',
            'link' => 'DetTM2270421DT60888ersw5c64d101509',
            'color' => 'Blanco',
            'created_at' => now()
        ]);
    }
}
