<?php

use App\Location;
use Illuminate\Database\Seeder;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $location =  Location::create([
            'name' => 'Jogjakarta',
        ]);
        $location->save();

        $location =  Location::create([
            'name' => 'Madiun',
        ]);
        $location->save();
    }
}
