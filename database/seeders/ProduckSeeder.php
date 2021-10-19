<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProduckSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'productId' =>1000,
            'produckName' => 'Product 1000'
        ]);

        Product::create([
            'productId' =>1001,
            'produckName' => 'Product 1001'
        ]);
    }
}
