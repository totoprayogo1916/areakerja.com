<?php

namespace Database\Seeders;

use App\Mitra;
use Illuminate\Database\Seeder;

class MitraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mitra = Mitra::create([
            'nama'      => 'Seven Inc',
            'email'     => 'fadelirsyad04@gmail.com',
            'deskripsi' => 'Perusahaan gg',
            'alamat'    => 'Banguntapan',
            'no'        => '0895329990656',
            'logo'      => 'seven.jpg',
            'koin'      => '100',
            'slug'      => 'seven-inc',
            'idUser'    => '3',
        ]);
        $mitra->save();

        $mitra = Mitra::create([
            'nama'      => 'ADAM JAYA',
            'email'     => 'mitra@mitra.com',
            'deskripsi' => 'Perusahaan gg',
            'alamat'    => 'Banguntapan',
            'no'        => '081234357779',
            'logo'      => 'logo.png',
            'koin'      => '100',
            'slug'      => 'adam-jaya',
            'idUser'    => '2',
        ]);
        $mitra->save();
    }
}
