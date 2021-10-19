<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Location::create([
            'locationId' =>1,
            'locationName' => 'Location 1'
        ]);

        Location::create([
            'locationId' =>2,
            'locationName' => 'Location 2'
        ]);
    }
}
