<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeed::class,
            StoreSeed::class,
            ItemSeed::class,
            ItemColorSeed::class,
            ItemSizeSeed::class,
            ShippingSeed::class
            ]);

    }
}
