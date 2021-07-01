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

        $price = Price::create([
            'nama'              => 'Silver',
            'deskripsi_singkat' => 'Jangkauan Cukup Luas',
            'deskripsi_full'    => '3 Kali Publikasi di semua jaringan AreaKerja.id',
            'list'              => ['Website & Aplikasi', 'Instagram Post & Story', 'Google Jobs & Bisnis', 'Facebook Post & Story', 'Twitter', 'Linkedin', 'Telegram'],
            'harga'             => 'Rp 5.000.000',
            'warna'             => '#858990',
        ]);
        $price->save();

        $price = Price::create([
            'nama'              => 'Bronze',
            'deskripsi_singkat' => 'Rekrut dengan Hemat',
            'deskripsi_full'    => '1 Kali Publikasi di semua jaringan AreaKerja.id',
            'list'              => ['Website & Aplikasi', 'Instagram Post & Story', 'Google Jobs & Bisnis', 'Facebook Post & Story', 'Twitter', 'Linkedin', 'Telegram'],
            'harga'             => 'Rp 2.500.000',
            'warna'             => '#605349',
        ]);
        $price->save();
        
    }
}
