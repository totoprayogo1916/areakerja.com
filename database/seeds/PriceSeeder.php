<?php

namespace Database\Seeders;

use App\Price;
use Illuminate\Database\Seeder;

class PriceSeeder extends Seeder
{
    public function run()
    {
        $price = Price::create([
            'nama'              => 'Gold',
            'deskripsi_singkat' => 'Paket Super Efektif',
            'deskripsi_full'    => '5 Kali Publikasi di semua jaringan AreaKerja.id',
            'list'              => ['Website & Aplikasi', 'Instagram Post & Story', 'Highlight Story Favorit', 'Google Jobs & Bisnis', 'Facebook Post & Story', 'Twitter', 'Linkedin', 'Telegram'],
            'harga'             => 'Rp 10.000.000',
            'warna'             => '#ffa70e',
        ]);
        $price->save();
    }
}
