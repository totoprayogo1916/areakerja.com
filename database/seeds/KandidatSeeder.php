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
            'nama'       => 'Rere Anggraini',
            'skillUtama' => 'Front-End Developer',
            'domisili'   => 'Yogyakarta',
            'biografi'   => 'Hai nama saya Rere Anggraini, saya berasal dari Yogyakarta',
            'slug'       => 'Rere-Anggraini',
            'idUser'     => '4',
        ]);
        $kandidat->save();

        $kandidat = Kandidat::create([
            'nama'       => 'Putra Arjuna',
            'skillUtama' => 'Back-End Developer',
            'domisili'   => 'Bandung',
            'biografi'   => 'Hai nama saya Putra Arjuna, saya berasal dari Bandung',
            'slug'       => 'Putra-Arjuna',

        ]);
        $kandidat->save();

        $kandidat = Kandidat::create([
            'nama'       => 'Ervalina Arisanto',
            'skillUtama' => 'Full Stack Developer',
            'domisili'   => 'Surabaya',
            'biografi'   => 'Hai nama saya Ervalina Arisanto, saya berasal dari Surabaya',
            'slug'       => 'Ervalina-Arisanto',
        ]);
        $kandidat->save();

        $kandidat = Kandidat::create([
            'nama'       => 'Rivan Sanjaya Arisanto',
            'skillUtama' => 'Android Developer',
            'domisili'   => 'Semarang',
            'biografi'   => 'Hai nama saya Rivan Sanjaya Arisanto, saya berasal dari Semarang',
            'slug'       => 'Rivan-Sanjaya-Arisanto',
        ]);
        $kandidat->save();
    }
}
