<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'ADMIN',
            'email' => 'admin@deto.com',
            'password' => Hash::make('rpineda34'),
            'nombreNegocio' => 'DetoShop',
            'created_at' => now()
            
        ]);
    }
}
