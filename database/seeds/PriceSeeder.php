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
            'deskripsi_full'    => '<p><strong>5 Kali Publikasi </strong>di semua jaringan AreaKerja.id</p>',
            'list'              => ['<img alt="" src="https://g-store.id/data/images/icon-official/ig-icon.png" style="height:10%; width:10%" /> Website & Aplikasi', 
                                    '<img alt="" src="https://g-store.id/data/images/icon-official/ig-icon.png" style="height:10%; width:10%" />   Instagram Post & Story', 
                                    '<img alt="" src="https://g-store.id/data/images/icon-official/ig-icon.png" style="height:10%; width:10%" />  Highlight Story Favorit', 
                                    '<img alt="" src="https://g-store.id/data/images/icon-official/ig-icon.png" style="height:10%; width:10%" />  Google Jobs & Bisnis', 
                                    '<img alt="" src="https://g-store.id/data/images/icon-official/ig-icon.png" style="height:10%; width:10%" />  Facebook Post & Story',
                                    '<img alt="" src="https://g-store.id/data/images/icon-official/ig-icon.png" style="height:10%; width:10%" />  Twitter', 
                                    '<img alt="" src="https://g-store.id/data/images/icon-official/ig-icon.png" style="height:10%; width:10%" />  Linkedin', 
                                    '<img alt="" src="https://g-store.id/data/images/icon-official/ig-icon.png" style="height:10%; width:10%" />  Telegram'],
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
