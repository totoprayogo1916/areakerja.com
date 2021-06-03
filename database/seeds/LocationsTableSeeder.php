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
            'name' => 'Kota Yogyakarta',
        ]);
        $location->save();
        
        $location =  Location::create([
            'name' => 'Sleman',
        ]);
        $location->save();

        $location =  Location::create([
            'name' => 'Bantul',
        ]);
        $location->save();

        $location =  Location::create([
            'name' => 'Kulon Progo',
        ]);
        $location->save();

        $location =  Location::create([
            'name' => 'Gunungkidul',
        ]);
        $location->save();

        $location =  Location::create([
            'name' => 'Luar Yogyakarta',
        ]);
        $location->save();
    }
}
