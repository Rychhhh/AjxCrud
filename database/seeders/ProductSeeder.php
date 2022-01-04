<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert default data 
        $data = [
            [
                'nama' => 'Shampoo',
                'harga' => '15000',
                'stok' => '125',
                'desc' => 'Keren',
                'produsen' => '1',
                'perusahaan' => 'Default Select'
            ],
            [
                'nama' => 'Conditioner',
                'harga' => '45000',
                'stok' => '455',
                'desc' => 'Keren Productnya',
                'produsen' => '2',
                'perusahaan' => 'Default Select'
            ],
            [
                'nama' => 'Parfume',
                'harga' => '95000',
                'stok' => '1555',
                'desc' => 'Keren Productnya',
                'produsen' => '2',
                'perusahaan' => 'Default Select'
            ],
        ];

        foreach ($data as $key => $value ) {
            Product::insert($value);
        }
    }
   
}
