<?php

use Illuminate\Database\Seeder;

class productsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'id_category' => 1,
            'name' => 'Vestido 1',
            'description' => 'mujer vsasd 1',
            'price' => 700000,
            'imageURL' => 'https://cdn-1.jjshouse.com/upimg/jjshouse/s1140/86/c9/becec809c38082e3db8310ca168786c9.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('products')->insert([
            'id_category' => 1,
            'name' => 'Vestido 2',
            'description' => 'mujer vsasd 2',
            'price' => 900000,
            'imageURL' => 'https://simages.ericdress.com/Upload/Image/2017/14/watermark/1050-1400/9835cd59-2c57-410e-9bb1-3e9cf99c1fae.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('products')->insert([
            'id_category' => 2,
            'name' => 'Vestido 1',
            'description' => 'hombre vsasd 1',
            'price' => 500000,
            'imageURL' => 'http://www.neudonostia.eu/images/1/neu-donostia-traje-novio-masculino-royrobson.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('products')->insert([
            'id_category' => 2,
            'name' => 'Vestido 2',
            'description' => 'hombre vsasd 2',
            'price' => 600000,
            'imageURL' => 'https://i.pinimg.com/originals/bc/76/ba/bc76badd7a1becc5becc6858a0a879b0.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('products')->insert([
            'id_category' => 3,
            'name' => 'Anillo 1',
            'description' => 'anillo vsasd 1',
            'price' => 800000,
            'imageURL' => 'https://eternity.com.co/991-thickbox_default/solitario-oro-18k-con-zafiro_bogota.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('products')->insert([
            'id_category' => 3,
            'name' => 'Anillo 2',
            'description' => 'anillo vsasd 2',
            'price' => 300000,
            'imageURL' => 'https://i2.linio.com/p/65f18e58ca142aa42146d11a4781707c-product.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
