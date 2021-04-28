<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ItemSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            'nombre' => 'Anti Theft Laptop Backpack Travel Backpacks Bookbag',
            'descripcion' => 'Una breve descripcion del producto mas un monton de palabras que no tienen nada que ver pero necesito relleno, espero que no esten leyendo todo esto porque estan perdiendo el tiempo.',
            'categoria' => 'Equipaje',
            'subcategoria' => 'Mochilas',
            'marca' => 'Deto Essentials',
            'specs' => '[{"specName":"Item Weight","specValue":"1.83 pounds"},{"specName":"Manufacturer","specValue":"SHRRADOO"},{"specName":"Item model number","specValue":"A16017"},{"specName":"STORAGE SPACE","specValue":"8"}]',
            'keyFeatures' => '[{"feature":"LOTS OF STORAGE SPACE&POCKETS: One separate laptop compartment hold 15 Inch Laptop as well as 15 Inch,14 Inch and 13 Inch Macbook/Laptop."},{"feature":"FUNCTIONAL&SAFE: A luggage strap allows travel laptop bag fit on luggage/suitcase, slide over the luggage upright handle tube for easier carrying."},{"feature":"USB PORT DESIGN: With built in USB charger outside and built in charging cable inside,this usb backpack offers you a more convenient way to charge your phone."},{"feature":"COMFY & BREATHABLE: Adjustable shoulder straps and back side comes with comfortable and breathable mesh design, relieves the stress of your shoulder."}]',
            'tipoVariante' => 'Color',
            'updateDate' => now(),
            'store_id' => 1,
            'nombreNegocio' => 'DetoShop',
            'user_id' => 1,
            'image' => '270421100400DM608889d834d00.jpg',
            'created_at' => now()



        ]);
    }
}
