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
    }
}
