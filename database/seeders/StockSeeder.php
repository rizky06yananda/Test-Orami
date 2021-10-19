<?php

namespace Database\Seeders;

use App\Models\Stock;
use Illuminate\Database\Seeder;

class StockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Stock::create([
            'productId' =>1000,
            'locationId' => 1,
            'stock' =>21
        ]);

        Stock::create([
            'productId' =>1000,
            'locationId' => 2,
            'stock' =>8
        ]);

        Stock::create([
            'productId' =>1001,
            'locationId' => 1,
            'stock' =>4
        ]);

        Stock::create([
            'productId' =>1001,
            'locationId' => 2,
            'stock' =>10
        ]);
    }
}
