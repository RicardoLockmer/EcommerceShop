<?php
namespace Database\Seeders;
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
        for($i = 1; $i < 10; $i++){
            DB::table('item_colors')->insert([
                'item_id' => $i,
                'colorImages' => '["270421100409DM60888ced5c678.jpg", "270421100409DM60888ced5c0002.jpg"]',
                'link' => 'DetTM2270421DT60888ced5c64d101509'.$i,
                'color' => 'Gris',
                'created_at' => now()
            ]);
            // DB::table('item_colors')->insert([
            //     'item_id' => 1,
            //     'colorImages' => '["270421100409DM60888ced85309.jpg", "270421100409DM60888ced8530902100.jpg"]',
            //     'link' => 'DetTM2270421DT60888ced851ea101509'.$i.'b',
            //     'color' => 'Gris Oscuro',
            //     'created_at' => now()
            // ]);
        }

        //APPLE WATCH
        for($i = 10; $i < 18; $i++){
            DB::table('item_colors')->insert([
                'item_id' => $i,
                'colorImages' => '["red1.jpg", "red2.jpg", "red3.jpg", "red4.jpg", "red5.jpg", "red6.jpg", "red7.jpg"]',
                'link' => $i.'DetTM2270421DT60888ea5c64d10150900'.now(),
                'color' => 'Rojo',
                'created_at' => now()
            ]);
            DB::table('item_colors')->insert([
                'item_id' => $i,
                'colorImages' => '["blue1.jpg", "b2.jpg", "b3.jpg", "b4.jpg", "b5.jpg", "b6.jpg"]',
                'link' => 'DetTM2270421DT60888efg5c64d1015091'.now(),
                'color' => 'Azul',
                'created_at' => now()
            ]);
            DB::table('item_colors')->insert([
                'item_id' => $i,
                'colorImages' => '["p1.jpg", "p2.jpg", "p3.jpg", "p4.jpg", "p5.jpg", "p6.jpg", "p7.jpg"]',
                'link' => 'DetTM2270421DT60888effg5c64d1015092'.now(),
                'color' => 'Rosa',
                'created_at' => now()
            ]);
            DB::table('item_colors')->insert([
                'item_id' => $i,
                'colorImages' => '["w1.jpg", "w2.jpg", "w3.jpg", "w4.jpg", "w5.jpg", "w6.jpg", "w7.jpg"]',
                'link' => 'DetTM2270421DT60888ersw5c64d1015093'.now(),
                'color' => 'Blanco',
                'created_at' => now()
            ]);
            DB::table('item_colors')->insert([
                'item_id' => $i,
                'colorImages' => '["red1.jpg", "red2.jpg", "red3.jpg", "red4.jpg", "red5.jpg", "red6.jpg", "red7.jpg"]',
                'link' => 'DetTM2270421DT60888ea5c64d10150921'.now(),
                'color' => 'Rojo',
                'created_at' => now()
            ]);
            DB::table('item_colors')->insert([
                'item_id' => $i,
                'colorImages' => '["blue1.jpg", "b2.jpg", "b3.jpg", "b4.jpg", "b5.jpg", "b6.jpg"]',
                'link' => 'DetTM2270421DT60888efg5c64d1015092111'.now(),
                'color' => 'Azul',
                'created_at' => now()
            ]);
            DB::table('item_colors')->insert([
                'item_id' => $i,
                'colorImages' => '["p1.jpg", "p2.jpg", "p3.jpg", "p4.jpg", "p5.jpg", "p6.jpg", "p7.jpg"]',
                'link' => 'DetTM2270421DT60888effg5c64d1015092144'.now(),
                'color' => 'Rosa',
                'created_at' => now()
            ]);
            DB::table('item_colors')->insert([
                'item_id' => $i,
                'colorImages' => '["w1.jpg", "w2.jpg", "w3.jpg", "w4.jpg", "w5.jpg", "w6.jpg", "w7.jpg"]',
                'link' => 'DetTM2270421DT60888ersw5c64d1015094545'.now(),
                'color' => 'Blanco',
                'created_at' => now()
            ]);
        }
    }
}
