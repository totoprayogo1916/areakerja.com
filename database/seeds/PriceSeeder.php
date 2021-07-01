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
            'list'              => ['<img alt="" src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/lokerjogjaid.png" style="height:10%; width:10%" /> Website & Aplikasi',
                '<img alt="" src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/instagram.png" style="height:10%; width:10%" />   Instagram Post & Story',
                '<img alt="" src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/instagram.png" style="height:10%; width:10%" />  Highlight Story Favorit',
                '<img alt="" src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/google.png" style="height:10%; width:10%" />  Google Jobs & Bisnis',
                '<img alt="" src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/facebook.png" style="height:10%; width:10%" />  Facebook Post & Story',
                '<img alt="" src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/twitter.png" style="height:10%; width:10%" />  Twitter',
                '<img alt="" src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/linkedin.png" style="height:10%; width:10%" />  Linkedin',
                '<img alt="" src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/telegram.png" style="height:10%; width:10%" />  Telegram', ],
            'harga' => 'Rp 10.000.000',
            'warna' => '#ffa70e',
        ]);
        $price->save();

        $price = Price::create([
            'nama'              => 'Silver',
            'deskripsi_singkat' => 'Jangkauan Cukup Luas',
            'deskripsi_full'    => '<p><strong>3 Kali Publikasi </strong> di semua jaringan AreaKerja.id</p>',
            'list'              => ['<img alt="" src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/lokerjogjaid.png" style="height:10%; width:10%" /> Website & Aplikasi',
                '<img alt="" src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/instagram.png" style="height:10%; width:10%" />   Instagram Post & Story',
                '<img alt="" src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/instagram.png" style="height:10%; width:10%" />  Highlight Story Favorit',
                '<img alt="" src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/google.png" style="height:10%; width:10%" />  Google Jobs & Bisnis',
                '<img alt="" src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/facebook.png" style="height:10%; width:10%" />  Facebook Post & Story',
                '<img alt="" src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/twitter.png" style="height:10%; width:10%" />  Twitter',
                '<img alt="" src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/linkedin.png" style="height:10%; width:10%" />  Linkedin',
                '<img alt="" src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/telegram.png" style="height:10%; width:10%" />  Telegram', ],
            'harga' => 'Rp 5.000.000',
            'warna' => '#858990',
        ]);
        $price->save();

        $price = Price::create([
            'nama'              => 'Bronze',
            'deskripsi_singkat' => 'Rekrut dengan Hemat',
            'deskripsi_full'    => '<p><strong>1 Kali Publikasi </strong> di semua jaringan AreaKerja.id</p>',
            'list'              => ['<img alt="" src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/lokerjogjaid.png" style="height:10%; width:10%" /> Website & Aplikasi',
                '<img alt="" src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/instagram.png" style="height:10%; width:10%" />   Instagram Post & Story',
                '<img alt="" src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/instagram.png" style="height:10%; width:10%" />  Highlight Story Favorit',
                '<img alt="" src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/google.png" style="height:10%; width:10%" />  Google Jobs & Bisnis',
                '<img alt="" src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/facebook.png" style="height:10%; width:10%" />  Facebook Post & Story',
                '<img alt="" src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/twitter.png" style="height:10%; width:10%" />  Twitter',
                '<img alt="" src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/linkedin.png" style="height:10%; width:10%" />  Linkedin',
                '<img alt="" src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/telegram.png" style="height:10%; width:10%" />  Telegram', ],
            'harga' => 'Rp 2.500.000',
            'warna' => '#605349',
        ]);
        $price->save();
    }
}
