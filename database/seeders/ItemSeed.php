<?php
namespace Database\Seeders;
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
        //MOCHILA
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
            'user_id' => 1,
            'image' => '270421100400DM608889d834d00.jpg',
            'created_at' => now()
        ]);

        // APPLE WATCH
        DB::table('items')->insert([
            'nombre' => 'Apple Watch Series 8',
            'descripcion' => 'Built-in GPS, GLONASS, Galileo, and QZSS, S6 with 64-bit dual-core processor, W3 Apple wireless chip, U1 Ultra Wideband chip, Barometric altimeter, Capacity 32GB, Blood oxygen sensor, Optical heart sensor, Electrical heart sensor, Improved accelerometer up to 32 g???forces, Improved gyroscope, Ambient light sensor, LTPO OLED Always-On Retina display with Force Touch.',
            'categoria' => 'Electronica',
            'subcategoria' => 'Accesorios',
            'marca' => 'Deto Essentials',
            'specs' => '[
                {"specName":"Aplicaci??n admitida","specValue":"Fitness Tracker, Sleep Monitor, Voice Assistant, Elevation Tracker, Heart Rate Monitor"},
                {"specName":"Marca","specValue":"Apple"},
                {"specName":"Est??ndar de comunicaci??n inal??mbrica","specValue":"Bluetooth, 5 GHz radiofrecuencia, 2,4 GHz radiofrecuencia"},
                {"specName":"Tecnolog??a de conectividad","specValue":"Bluetooth, GPS"},
                {"specName":"Sistema operativo", "specValue":"WatchOS"},
                {"specName":"Dispositivos compatibles", "specValue":"Smarthphone"},
                {"specName":"Caracter??sticas especiales", "specValue":"Activity Tracker"},
                {"specName":"Entrada de interfaz humana", "specValue":"Dial, Pantalla t??ctil"}]',
            'keyFeatures' => '[
                {"feature":"El modelo GPS te permite hacer llamadas y responder a los textos de tu mu??eca."},
                {"feature":"Sincroniza tu m??sica, podcasts y audiolibros."},
                {"feature":"Mide tu ox??geno en sangre con un nuevo sensor y aplicaci??n."},{"feature":"Comprueba tu ritmo card??aco con la aplicaci??n ECG."},
                {"feature":"La pantalla Retina siempre encendida es 2,5 veces m??s brillante al aire libre cuando tu mu??eca est?? abajo."},
                {"feature":"S6 SiP es hasta un 20% m??s r??pido que la Serie 5"},
                {"feature":"5 GHz Wi-Fi y chip U1 Ultra de banda ancha"},
                {"feature":"Realiza un seguimiento de tu actividad diaria en Apple Watch y ve tus tendencias en la aplicaci??n Fitness en iPhone."},
                {"feature":"Mide entrenamientos como correr, caminar, ciclismo, yoga, nataci??n y baile."},
                {"feature":"Dise??o Swimproof"}]',
            'tipoVariante' => 'Color',
            'updateDate' => now(),
            'store_id' => 1,
            'user_id' => 1,
            'image' => 'red1.jpg',
            'created_at' => now()
        ]);
    }
}
