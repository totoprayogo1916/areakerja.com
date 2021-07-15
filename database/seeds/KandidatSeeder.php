<?php

use App\Kandidat;
use Illuminate\Database\Seeder;

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
            'username'   => 'Rere Anggraini',
            'skillUtama' => 'Front-End Developer',
            'domisili'   => 'Yogyakarta',
            'slug'       => 'Rere-Anggraini',
        ]);
        $kandidat->save();

        $kandidat = Kandidat::create([
            'username'   => 'Putra Arjuna',
            'skillUtama' => 'Back-End Developer',
            'domisili'   => 'Bandung',
            'slug'       => 'Putra-Arjuna',

        ]);
        $kandidat->save();

        $kandidat = Kandidat::create([
            'username'   => 'Ervalina Arisanto',
            'skillUtama' => 'Full Stack Developer',
            'domisili'   => 'Surabaya',
            'slug'       => 'Ervalina-Arisanto',
        ]);
        $kandidat->save();

        $kandidat = Kandidat::create([
            'username'   => 'Rivan Sanjaya Arisanto',
            'skillUtama' => 'Android Developer',
            'domisili'   => 'Semarang',
            'slug'       => 'Rivan-Sanjaya-Arisanto',
        ]);
        $kandidat->save();
    }
}
