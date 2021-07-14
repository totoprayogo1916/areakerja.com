<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Mitra;
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
            'nama' => 'Seven Inc',
            'email' => 'fadelirsyad04@gmail.com',
            'deskripsi' => 'Perusahaan gg',
            'alamat'    => 'Banguntapan',
            'no'       => '0895329990656',
            'logo'     => 'seven.jpg',
            'koin' => '100',
            'idUser' => '3'
        ]);
        $mitra->save();
    }
}
