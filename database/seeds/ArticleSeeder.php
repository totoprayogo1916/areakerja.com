<?php

namespace Database\Seeders;

use App\Article;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $article = Article::create([
            'judul' => 'Cari Kerja Terasa Sulit? Mungkin, Kamu Perlu Tips Ini',
            'ringkasan' => 'Belum punya pengalaman kerja, tentu akan menyulitkan seseorang untuk mendapatkan pekerjaan. Kamu bisa lakukan tips ini agar lebih berpotensi diterima kerja.',
            'content' => '<h1><strong>Tips&nbsp;Cari&nbsp;Kerja&nbsp;</strong></h1>

            <p>Sudah&nbsp;bukan&nbsp;lagi&nbsp;hal&nbsp;yang&nbsp;aneh&nbsp;bila&nbsp;mencari&nbsp;pekerjaan&nbsp;memang&nbsp;menjadi&nbsp;sebuah&nbsp;tantangan&nbsp;tersendiri&nbsp;bagi&nbsp;para&nbsp;pencarinya.Penolakan&nbsp;kerja&nbsp;berulang-ulang&nbsp;tentunya&nbsp;menjadi&nbsp;sebuah&nbsp;beban&nbsp;bagi&nbsp;para&nbsp;pencari&nbsp;kerja.&nbsp;Khususnya&nbsp;fresh&nbsp;graduate&nbsp;yang&nbsp;masih&nbsp;minim&nbsp;pengalaman&nbsp;kerja.Kondisi&nbsp;seperti&nbsp;ini&nbsp;sudah&nbsp;jelas&nbsp;akan&nbsp;membuat&nbsp;cari&nbsp;kerja&nbsp;terasa&nbsp;sulit&nbsp;dan&nbsp;terbebani.&nbsp;Apalagi,&nbsp;jika&nbsp;sudah&nbsp;berbulan-bulan&nbsp;tak&nbsp;dapat&nbsp;pekerjaan. Namun,&nbsp;semua&nbsp;itu&nbsp;bukan&nbsp;menjadi&nbsp;alasan.&nbsp;Karena,&nbsp;ada&nbsp;beberapa&nbsp;upaya&nbsp;atau&nbsp;tips&nbsp;yang&nbsp;bisa&nbsp;kamu&nbsp;lakukan&nbsp;untuk&nbsp;mempermudah&nbsp;kamu&nbsp;mencari&nbsp;kerja. Dimana,&nbsp;tips&nbsp;ini&nbsp;cukup&nbsp;efektif&nbsp;dalam&nbsp;mendapatkan&nbsp;lowongan&nbsp;kerja&nbsp;secara&nbsp;mudah,&nbsp;sesuai&nbsp;bidangnya,&nbsp;dan&nbsp;mudah&nbsp;dalam&nbsp;mengajukan&nbsp;pelamaran.&nbsp;Untuk&nbsp;lebih&nbsp;jelasnya,&nbsp;mari&nbsp;kita&nbsp;simak&nbsp;bersama&nbsp;bagaimana&nbsp;tips&nbsp;yang&nbsp;tepat&nbsp;untuk&nbsp;mencari&nbsp;kerja&nbsp;yang&nbsp;terasa&nbsp;sulit&nbsp;dan&nbsp;susah.</p>
            
            <p><img alt="" src="https://assets.digination.id/crop/14x159:999x821/x/photo/2019/02/04/3641475024.jpg" style="height:336px; width:500px" /></p>
            
            <p>1&nbsp;.&nbsp;Cari&nbsp;Lowongan&nbsp;di&nbsp;Situs&nbsp;Resmi</p>
            
            <p>Pertama,&nbsp;sudah&nbsp;jelas&nbsp;buat&nbsp;kamu&nbsp;yang&nbsp;kesulitan&nbsp;cari&nbsp;kerja,&nbsp;kamu&nbsp;bisa&nbsp;coba&nbsp;untuk&nbsp;mencari&nbsp;lowongan&nbsp;kerja&nbsp;di&nbsp;situs&nbsp;resmi&nbsp;perusahaan&nbsp;pengiklan&nbsp;loker.&nbsp;Cara&nbsp;ini&nbsp;jauh&nbsp;lebih&nbsp;efektif&nbsp;dan&nbsp;tak&nbsp;akan&nbsp;membuang buang&nbsp;waktumu&nbsp;dalam&nbsp;mencari&nbsp;loker.&nbsp;Sehingga,&nbsp;kamu&nbsp;bisa&nbsp;memanfaatkan&nbsp;waktu&nbsp;lebih&nbsp;efisien.&nbsp;Namun,&nbsp;sebaiknya&nbsp;gunakan&nbsp;situs&nbsp;penyedia&nbsp;iklan&nbsp;loker&nbsp;resmi&nbsp;yang&nbsp;sudah&nbsp;memiliki&nbsp;kredibilitas&nbsp;tinggi&nbsp;sebagai&nbsp;penyedia&nbsp;info&nbsp;lowongan&nbsp;kerja.&nbsp;Langkah&nbsp;ini&nbsp;untuk&nbsp;mencegah&nbsp;atau&nbsp;menghindari&nbsp;modus&nbsp;penipuan&nbsp;yang&nbsp;berkedok&nbsp;lowongan&nbsp;pekerjaan.&nbsp;Dengan&nbsp;begitu&nbsp;maka&nbsp;kamu&nbsp;akan&nbsp;lebih&nbsp;mudah&nbsp;menyaring&nbsp;mana&nbsp;lowongan&nbsp;yang&nbsp;benar-benar&nbsp;dan&nbsp;mana&nbsp;info&nbsp;loker&nbsp;menyesatkan.</p>
            
            <p>&nbsp;</p>',
            'gambar' => 'Areakerja.jpeg'
        ]);
        $article->save();
    }
}
