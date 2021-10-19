<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Stoct extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stoct')->insert([
            'productId' =>1000,
            'locationId' => 1,
            'stoct' =>21
        ]);

        DB::table('stoct')->insert([
            'productId' =>1000,
            'locationId' => 2,
            'stoct' =>8
        ]);

        DB::table('stoct')->insert([
            'productId' =>1001,
            'locationId' => 1,
            'stoct' =>4
        ]);

        DB::table('stoct')->insert([
            'productId' =>1001,
            'locationId' => 2,
            'stoct' =>10
        ]);
    }
}
