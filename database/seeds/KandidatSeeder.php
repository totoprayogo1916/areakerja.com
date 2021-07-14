<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Kandidat;

class KandidatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kandidat = Kandidat::create([
            'username' => 'Rere Anggraini',
            'skillUtama' => 'Front-End Developer',
            'domisili' => 'Yogyakarta',
        ]);
        $kandidat->save();

        $kandidat = Kandidat::create([
            'username' => 'Putra Arjuna',
            'skillUtama' => 'Back-End Developer',
            'domisili' => 'Bandung',
        ]);
        $kandidat->save();

        $kandidat = Kandidat::create([
            'username' => 'Putra Arjuna',
            'skillUtama' => 'Back-End Developer',
            'domisili' => 'Bandung',
        ]);
        $kandidat->save();

        $kandidat = Kandidat::create([
            'username' => 'Putra Arjuna',
            'skillUtama' => 'Back-End Developer',
            'domisili' => 'Bandung',
        ]);
        $kandidat->save();
    }
}
