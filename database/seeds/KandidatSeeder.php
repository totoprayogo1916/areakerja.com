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
            'idUser'     => '5',

        ]);
        $kandidat->save();

        $kandidat = Kandidat::create([
            'nama'       => 'Ervalina Arisanto',
            'skillUtama' => 'Full Stack Developer',
            'domisili'   => 'Surabaya',
            'biografi'   => 'Hai nama saya Ervalina Arisanto, saya berasal dari Surabaya',
            'slug'       => 'Ervalina-Arisanto',
            'idUser'     => '6',
        ]);
        $kandidat->save();

        $kandidat = Kandidat::create([
            'nama'       => 'Rivan Sanjaya Arisanto',
            'skillUtama' => 'Android Developer',
            'domisili'   => 'Semarang',
            'biografi'   => 'Hai nama saya Rivan Sanjaya Arisanto, saya berasal dari Semarang',
            'slug'       => 'Rivan-Sanjaya-Arisanto',
            'idUser'     => '7',
        ]);
        $kandidat->save();

        $kandidat = Kandidat::create([
            'nama'       => 'Atmanda Putri',
            'skillUtama' => 'Android Developer',
            'domisili'   => 'Klaten',
            'biografi'   => 'Hai nama saya Atmanda Putri, saya berasal dari KLaten',
            'slug'       => 'Atmanda-Putri',
            'idUser'     => '8',
        ]);
        $kandidat->save();

        $kandidat = Kandidat::create([
            'nama'       => 'Rizaldi Azhar',
            'skillUtama' => 'Back-End Developer',
            'domisili'   => 'Surabaya',
            'biografi'   => 'Hai nama saya Rizaldi Azhar, saya berasal dari Surabaya',
            'slug'       => 'Rizaldi-Azhar',
            'idUser'     => '9',
        ]);
        $kandidat->save();

        $kandidat = Kandidat::create([
            'nama'       => 'Killa Anggraini',
            'skillUtama' => 'Back-End Developer',
            'domisili'   => 'Semarang',
            'biografi'   => 'Hai nama saya Killa Anggraini, saya berasal dari Semarang',
            'slug'       => 'Killa-Anggraini',
            'idUser'     => '10',
        ]);
        $kandidat->save();

        $kandidat = Kandidat::create([
            'nama'       => 'Nimas Ayu',
            'skillUtama' => 'Front-End Developer',
            'domisili'   => 'Yogyakarta',
            'biografi'   => 'Hai nama saya Nimas Ayu, saya berasal dari Yogyakarta',
            'slug'       => 'Nimas-Ayu',
            'idUser'     => '11',
        ]);
        $kandidat->save();

        $kandidat = Kandidat::create([
            'nama'       => 'Bagas Pradita',
            'skillUtama' => 'Full Stack Developer',
            'domisili'   => 'Yogyakarta',
            'biografi'   => 'Hai nama saya Bagas Pradita, saya berasal dari Yogyakarta',
            'slug'       => 'Bagas-Pradita',
            'idUser'     => '12',
        ]);
        $kandidat->save();

        $kandidat = Kandidat::create([
            'nama'       => 'Unggul Putra',
            'skillUtama' => 'Full Stack Developer',
            'domisili'   => 'Yogyakarta',
            'biografi'   => 'Hai nama saya Unggul Putra, saya berasal dari Yogyakarta',
            'slug'       => 'Unggul-Putra',
            'idUser'     => '13',
        ]);
        $kandidat->save();

        $kandidat = Kandidat::create([
            'nama'       => 'Valeno Aksara',
            'skillUtama' => 'Full Stack Developer',
            'domisili'   => 'Surakarta',
            'biografi'   => 'Hai nama saya Valeno Aksara, saya berasal dari Surakarta',
            'slug'       => 'Valeno-Aksara',
            'idUser'     => '14',
        ]);
        $kandidat->save();

        $kandidat = Kandidat::create([
            'nama'       => 'Nila Cahyani',
            'skillUtama' => 'Android Developer',
            'domisili'   => 'Madiun',
            'biografi'   => 'Hai nama saya Nila Cahyani, saya berasal dari Madiun',
            'slug'       => 'Nila-Cahyani',
            'idUser'     => '15',
        ]);
        $kandidat->save();

        $kandidat = Kandidat::create([
            'nama'       => 'Aditya Laksana',
            'skillUtama' => 'Jaringan',
            'domisili'   => 'Surakarta',
            'biografi'   => 'Hai nama saya Aditya Laksana, saya berasal dari Surakarta',
            'slug'       => 'Aditya-Laksana',
            'idUser'     => '16',
        ]);
        $kandidat->save();

        $kandidat = Kandidat::create([
            'nama'       => 'Rinjani Sekar',
            'skillUtama' => 'Front-End Developer',
            'domisili'   => 'Malang',
            'biografi'   => 'Hai nama saya Rinjani Sekar, saya berasal dari Malang',
            'slug'       => 'Rinjani-Sekar',
            'idUser'     => '17',
        ]);
        $kandidat->save();

        $kandidat = Kandidat::create([
            'nama'       => 'Yoga Ardyansyah',
            'skillUtama' => 'Jaringan',
            'domisili'   => 'Malang',
            'biografi'   => 'Hai nama saya Yoga Ardyansyah, saya berasal dari Malang',
            'slug'       => 'Yoga-Ardyansyah',
            'idUser'     => '18',
        ]);
        $kandidat->save();

        $kandidat = Kandidat::create([
            'nama'       => 'Aldiva Putri',
            'skillUtama' => 'Full Stack Developer',
            'domisili'   => 'Yogyakarta',
            'biografi'   => 'Hai nama saya Aldiva Putri, saya berasal dari Yogyakarta',
            'slug'       => 'Aldiva-Putri',
            'idUser'     => '19',
        ]);
        $kandidat->save();

        $kandidat = Kandidat::create([
            'nama'       => 'Yusuf Eka',
            'skillUtama' => 'Jaringan',
            'domisili'   => 'Purworejo',
            'biografi'   => 'Hai nama saya Yusuf Eka, saya berasal dari Purworejo',
            'slug'       => 'Yusuf-Eka',
            'idUser'     => '20',
        ]);
        $kandidat->save();
    }
}
