<?php

namespace Database\Seeders;

use App\Artikel;
use Illuminate\Database\Seeder;

class ArtikelSeeder extends Seeder
{
    public function run()
    {
        $artikel = Artikel::create([
            'title' => 'Cari Kerja Terasa Sulit? Mungkin, Kamu Perlu Tips Ini',
            'image' => '',
            'des_singkat' => 'Belum punya pengalaman kerja, tentu akan menyulitkan seseorang untuk mendapatkan pekerjaan. Kamu bisa lakukan tips ini agar lebih berpotensi diterima kerja.',
            'des1' => 'Tips Cari Kerja – Sudah bukan lagi hal yang aneh bila mencari pekerjaan memang menjadi sebuah tantangan tersendiri bagi para pencarinya.',
            'des2' => 'Penolakan kerja berulang-ulang tentunya menjadi sebuah beban bagi para pencari kerja. Khususnya fresh graduate yang masih minim pengalaman kerja.',
            'des3' => 'Kondisi seperti ini sudah jelas akan membuat cari kerja terasa sulit dan terbebani. Apalagi, jika sudah berbulan-bulan tak dapat pekerjaan.',
            'des4' => 'Namun, semua itu bukan menjadi alasan. Karena, ada beberapa upaya atau tips yang bisa kamu lakukan untuk mempermudah kamu mencari kerja.',
            'des5' => 'Dimana, tips ini cukup efektif dalam mendapatkan lowongan kerja secara mudah, sesuai bidangnya, dan mudah dalam mengajukan pelamaran.',
            'des6' => 'Untuk lebih jelasnya, mari kita simak bersama bagaimana tips yang tepat untuk mencari kerja yang terasa sulit dan susah.',
            'des7' => '',
            'judul_singkat' => 'Tips Cari Kerja',
            'penghantar' => 'Tak perlu bingung belum dapat kerja. Ada tips efektif mencari kerja yang tepat jika kamu merasa sulit mencari lowongan. Berikut tips yang bisa kamu terapkan.',
            'judulisi1' => '1 . Cari Lowongan di Situs Resmi',
            'isi11' => 'Pertama, sudah jelas buat kamu yang kesulitan cari kerja, kamu bisa coba untuk mencari lowongan kerja di situs resmi perusahaan pengiklan loker.',
            'isi12' => 'Cara ini jauh lebih efektif dan tak akan membuang-buang waktumu dalam mencari loker. Sehingga, kamu bisa memanfaatkan waktu lebih efisien.',
            'isi13' => 'Namun, sebaiknya gunakan situs penyedia iklan loker resmi yang sudah memiliki kredibilitas tinggi sebagai penyedia info lowongan kerja.',
            'isi14' => 'Langkah ini untuk mencegah atau menghindari modus penipuan yang berkedok lowongan pekerjaan. Dengan begitu maka kamu akan lebih mudah menyaring mana lowongan yang benar-benar dan mana info loker menyesatkan.',
            'isi15' => '',
            'isi16' => '',
            'judulisi2' => '2. Ajukan Lamaran di Lowongan Seadanya',
            'isi21' => 'Jika kamu masih belum juga mendapat pekerjaan, kamu bisa mencoba untuk keluar dari zona nyamanmu, yaitu dengan mengajukan lamaran di bidang pekerjaan yang mungkin saja tak cocok dengan keahlianmu.',
            'isi22' => 'Langkah ini tentu sebagai salah satu batu loncatan sebelum kamu melamar di perusahaan yang sesuai dengan keahlian atau bidang kamu.',
            'isi23' => 'Setidaknya, sambil mendapatkan pengalaman di dunia kerja, cara seperti ini juga efektif untuk mendapatkan sumber penghasilan. Meskipun tak seberapa namun bisa kamu jadikan uang saku atau persiapan saat kamu mulai mencari lowongan yang sesuai minat maupun kemampuanmu.',
            'isi24' => '',
            'isi25' => '',
            'isi26' => '',
            'judulisi3' => '3. Perbaiki CV yang Lebih Profesional',
            'isi31' => 'Di sisi lain, bila ada kesulitan kamu dalam mendapatkan pekerjaan, tentu saja kamu bisa mencoba untuk meneliti kembali dan memperbaiki CV.',
            'isi32' => 'Karena, bisa jadi bukan karena kamu sulit mencari kerja, tapi lebih kepada sulit untuk diterima perusahaan. Hal ini juga bisa saja dipengaruhi dari kualitas CV kamu yang kurang menarik di mata perusahaan.',
            'isi33' => '',
            'isi34' => '',
            'isi35' => '',
            'isi36' => '',
            'judulisi4' => '4. Cari Info Loker di Situs yang Langsung Lamar',
            'isi41' => 'Maksudnya, untuk mempermudah kamu dalam mencari kerja agar tidak sulit, kamu bisa mencari situs resmi penyedia iklan lowongan kerja yang menyediakan kemudahan dalam pengajuan lamaran.',
            'isi42' => 'Biasanya, akan ada navigasi dalam situs tersebut yang menawarkan kamu untuk mengajukan surat lamaran untuk nanti diteruskan ke pihak perusahaan oleh situs tersebut.',
            'isi43' => 'Langkah ini jauh lebih simple daripada kamu harus mengajukan secara mandiri. Jadi, cukup mengupload file CV dan berkas lamaran dalam bentuk PDF. Selanjutnya, kamu tinggal menunggu panggilan kerja jika lolos verifikasi.',
            'isi44' => 'Nah, khusus buat kamu yang ingin mendapatkan loker Jogja dengan navigasi pengajuan lamaran langsung via website, kamu bisa merujuk ke situs LokerJogja.ID dengan ragam jenis info lowongan terbaru.',
            'isi45' => '',
            'isi46' => '',
            'judulisi5' => '',
            'isi51' => '',
            'isi52' => '',
            'isi53' => '',
            'isi54' => '',
            'isi55' => '',
            'isi56' => '',
        ]);
        $artikel->save();
    }
}
