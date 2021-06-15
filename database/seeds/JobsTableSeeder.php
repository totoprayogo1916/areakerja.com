<?php

use App\Category;
use App\Company;
use App\Job;
use App\Location;
use Illuminate\Database\Seeder;

class JobsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $job = Job::create([
            'title' => 'Kameramen',
            'short_description' => 'Membuka lowongan kerja untuk posisi sebagai kameramen',
            'full_description' =>
                'Membuka lowongan kerja untuk posisi sebagai kameramen acara talkshow',
            'requirements' => ['Berpengalaman di bidangnya minimal 1 tahun','Adaptif dengan semua jenis kamera','Memahami Adobe Premiere (menguasai After Effect menjadi poin plus)'],
            'job_nature' => 'Full-time',
            'address' => 'Banguntapan',
            'top_rated' => '1',
            'salary' => '10k - 20k',
            'location_id' => '3',
            'company_id' => '2',
            'email' => 'fadelirsyad08@gmail.com',
            'notelp' => '0895329990656',
            'pendidikan' => 'SMA/S1/S2',
            'gender' => 'Pria/Wanita',
            'bataslamaran' => '20 Januari 2021',
            'umur' => 'Maks 20 Tahun',
            'lokasikerja' => 'Jalan Kanoman No. 20 Banguntapan, Yogyakarta'
        ]);
        $job->save();
        $job->categories()->sync(3);

        $job = Job::create([
            'title' => 'Customer Service',
            'short_description' =>
                'Membuka lowongan kerja untuk posisi sebagai Customer Service.',
            'full_description' =>
                'JW Media Production saat ini membuka lowongan kerja untuk posisi sebagai Customer Service.',
            'requirements' => ['Jujur, amanah, tanggung jawab, cekatan, Teliti dan sabar','Komunikatif & Mampu bekerja dalam team / individu','Dapat menggunakan komputer dan internet'],
            'job_nature' => 'Full-time',
            'address' => 'Banguntapan jogja',
            'top_rated' => '1',
            'salary' => '10jt - 20jt',
            'location_id' => '3',
            'company_id' => '6',
            'email' => 'fadelirsyad08@gmail.com',
            'notelp' => '0895329990656',
            'pendidikan' => 'SMA/S1/S2',
            'gender' => 'Pria/Wanita',
            'bataslamaran' => '20 Jani 2021',
            'umur' => 'Maks 25 Tahun',
            'lokasikerja' => 'Jalan Bimo No. 20 Sleman, Yogyakarta'
        ]);
        $job->save();
        $job->categories()->sync(4);

        $job = Job::create([
            'title' => 'Pramusaji / Pelayan di Rumah Makan',
            'short_description' =>
                'Pawon Resto adalah perusahaan yang bergerak dibidang kuliner.',
            'full_description' =>
                'Pawon Resto adalah perusahaan yang bergerak dibidang kuliner.',
            'requirements' => ['Jujur, amanah, tanggung jawab, cekatan, Teliti dan sabar','Mempunyai pengalaman di rumah makan minimal 1 tahun','Mengerti administrasi'],
            'job_nature' => 'Full-time',
            'address' => 'Banguntapan jogja',
            'top_rated' => '0',
            'salary' => '500k - 700k',
            'location_id' => '3',
            'company_id' => '1',
            'email' => 'fadelirsyad08@gmail.com',
            'notelp' => '0895329990656',
            'pendidikan' => 'SMA/SMK sederajat',
            'gender' => 'Pria/Wanita',
            'bataslamaran' => '28 Juni 2021',
            'umur' => 'Maks 26 Tahun',
            'lokasikerja' => 'Jalan Kawedanan No. 20 Kulon Progo, Yogyakarta'
        ]);
        $job->save();
        $job->categories()->sync(5);

        $job = Job::create([
            'title' => 'Admin',
            'short_description' =>
                'membuka lowongan kerja untuk posisi sebagai Admin.',
            'full_description' =>
                'Panara Course adalah program pelatihan dan pendidikan untuk masuk TNI dan POLRI yang dipersiapkan secara Akademik, Psikologi, Fisik, dan Mental sebelum mengikuti pendaftaran resmi Taruna TNI dan POLRI.
                Panara Course berdiri di bawah badan Hukum PT. Pendidikan Abdi Negara.',
            'requirements' => ['Dapat menggunakan komputer dan internet','Cekatan dan teliti','Sabar dalam merespon chat konsumen'],
            'job_nature' => 'Full-time',
            'address' => 'DIY',
            'top_rated' => '1',
            'salary' => '800k - 1jt',
            'location_id' => '1',
            'company_id' => '6',
            'email' => 'fadelirsyad08@gmail.com',
            'notelp' => '0895329990656',
            'pendidikan' => 'SMA/S1/S2',
            'gender' => 'Wanita',
            'bataslamaran' => '1 Juli 2021',
            'umur' => 'Maks 24 Tahun',
            'lokasikerja' => 'Jalan Affandi No. 20 Depok, Sleman, Yogyakarta'
        ]);
        $job->save();
        $job->categories()->sync(4);

        $job = Job::create([
            'title' => 'Content Creator',
            'short_description' =>
                'membuka lowongan kerja untuk posisi sebagai Content Creator.',
            'full_description' =>
                'Saat ini membuka lowongan kerja untuk posisi sebagai Content Creator.',
            'requirements' => ['Minimal 2 tahun pengalaman sebagai content creator, video editor, vidiografi','Mampu bekerja cepat dan di target','Pengatahuan mengenai FB, IG, TikTok dan YOutube'],
            'job_nature' => 'Full-time',
            'address' => 'Bantul',
            'top_rated' => '0',
            'salary' => '800k - 1jt',
            'location_id' => '3',
            'company_id' => '2',
            'email' => 'fadelirsyad08@gmail.com',
            'notelp' => '0895329990656',
            'pendidikan' => 'SMA/S1/S2',
            'gender' => 'Pria/Wanita',
            'bataslamaran' => '20 Juni 2021',
            'umur' => 'Maks 20 Tahun',
            'lokasikerja' => 'Jalan Kanoman No. 20 Banguntapan Yogyakarta'
        ]);
        $job->save();
        $job->categories()->sync(1);

        $job = Job::create([
            'title' => 'Designer Videpgrapher',
            'short_description' =>
                'Jogja Tailor adalah perusahaan yang bergerak di bidang fashion',
            'full_description' =>
                'Membuka kesempatan berkarir bagi para profesional muda yang aktif untuk bergabung bersama kami di posisi Desainer.',
            'requirements' => ['Pria/wanita Single','Familiar dengan software video editing (adobe premiere / after effects dll), Corel, Photoshop.','Memiliki kemampuan pengambilan video dengan kamera (DSLR/Mirrorless)menjadi nilai tambah'],
            'job_nature' => 'Full-time',
            'address' => 'Sleman',
            'top_rated' => '1',
            'salary' => '1 jt - 1,2 jt',
            'location_id' => '2',
            'company_id' => '4',
            'email' => 'fadelirsyad08@gmail.com',
            'notelp' => '0895329990656',
            'pendidikan' => 'SMA/S1/S2',
            'gender' => 'Pria/Wanita',
            'bataslamaran' => '20 Juni 2021',
            'umur' => 'Maks 24 Tahun',
            'lokasikerja' => 'Jalan Kenari No. 29 Yogyakarta'
        ]);
        $job->save();
        $job->categories()->sync(3);

        $job = Job::create([
            'title' => 'Barista - Waiters - Cashier',
            'short_description' =>
                'membuka lowongan kerja untuk posisi sebagai Barista, Waiters, Cashier.',
            'full_description' =>
                'membuka lowongan kerja untuk posisi sebagai Barista, Waiters, Cashier.',
            'requirements' => ['Berpenampilan menarik','Menguasai mesin kopi dan manual brewuntuk barista','Memiliki ketertarikan di dunia food & beverages'],
            'job_nature' => 'Full-time',
            'address' => 'Bantul',
            'top_rated' => '0',
            'salary' => '500k',
            'location_id' => '3',
            'company_id' => '3',
            'email' => 'fadelirsyad08@gmail.com',
            'notelp' => '0895329990656',
            'pendidikan' => 'SMA/S1/S2',
            'gender' => 'Pria/Wanita',
            'bataslamaran' => '20 Januari 2021',
            'umur' => 'Maks 20 Tahun',
            'lokasikerja' => 'Jalan Manunggal No. 20 Yogyakarta'
        ]);
        $job->save();
        $job->categories()->sync(5);

        $job = Job::create([
            'title' => 'Videographer',
            'short_description' =>
                'PT. Kata Suhu Kita dengan brand SUHU Consulting and Training merupakah sebuah perusahaan yang bergerak di bidang jasa pelatihan dan konsultasi IT dan SDM.',
            'full_description' =>
                'SUHU mengajak talenta-talenta muda yang mempunyai semangat tinggi untuk bergabung menjadi keluarga baru kami',
            'requirements' => ['Pria/wanita Single','Familiar dengan software video editing (adobe premiere / after effects dll), Corel, Photoshop.','Memiliki kemampuan pengambilan video dengan kamera (DSLR/Mirrorless)menjadi nilai tambaha'],
            'job_nature' => 'Full-time',
            'address' => 'Sleman',
            'top_rated' => '0',
            'salary' => '900k',
            'location_id' => '2',
            'company_id' => '2',
            'email' => 'fadelirsyad08@gmail.com',
            'notelp' => '0895329990656',
            'pendidikan' => 'SMA/S1/S2',
            'gender' => 'Pria/Wanita',
            'bataslamaran' => '2 Juli 2021',
            'umur' => 'Maks 22 Tahun',
            'lokasikerja' => 'Jalan Laksda. Adi Sucipto No. 89 Yogyakarta'
        ]);
        $job->save();
        $job->categories()->sync(3);

        $job = Job::create([
            'title' => 'Food and Beverage Manager',
            'short_description' =>
                'The Oxalis Regency Hotel ini berjarak 2 KM dari Borobudur International Golf & Country Club',
            'full_description' =>
                'The Oxalis Regency Hotel ini berjarak 2 KM dari Borobudur International Golf & Country Club',
            'requirements' => ['Selalu mempunyai ide untuk penjualan','Berpengalaman','Pria/wanita max 30th'],
            'job_nature' => 'Full-time',
            'address' => 'DIY',
            'top_rated' => '0',
            'salary' => '4 - 5 Juta',
            'location_id' => '1',
            'company_id' => '5',
            'email' => 'fadelirsyad08@gmail.com',
            'notelp' => '0895329990656',
            'pendidikan' => 'SMA/S1/S2',
            'gender' => 'Pria/Wanita',
            'bataslamaran' => '25 Juni 2021',
            'umur' => 'Maks 25 Tahun',
            'lokasikerja' => 'Jalan Kanoman No. 20 Banguntapan Yogyakarta'
        ]);
        $job->save();
        $job->categories()->sync(4);

        $job = Job::create([
            'title' => 'Editor Video',
            'short_description' =>
                'JW Media Production adalah pengelola website dan beberapa channel Youtube yang berlokasi di Yogyakarta.',
            'full_description' =>
                'Saat ini, kami membuka kesempatan bagi orang-orang dengan kreativitas tinggi untuk bergabung dan berkarir dengan tim kami.',
            'requirements' => ['Pria/wanita Single','Familiar dengan software video editing (adobe premiere / after effects dll), Corel, Photoshop.','Memiliki kemampuan pengambilan video dengan kamera (DSLR/Mirrorless)menjadi nilai tambah'],
            'job_nature' => 'Full-time',
            'address' => 'Sleman',
            'top_rated' => '0',
            'salary' => '2,5 - 4,5 Juta',
            'location_id' => '2',
            'company_id' => '2',
            'email' => 'fadelirsyad08@gmail.com',
            'notelp' => '0895329990656',
            'pendidikan' => 'SMA/S1/S2',
            'gender' => 'Pria/Wanita',
            'bataslamaran' => '20 Juni 2021',
            'umur' => 'Maks 20 Tahun',
            'lokasikerja' => 'Jalan Kanoman No. 20 Banguntapan Yogyakarta'
        ]);
        $job->save();
        $job->categories()->sync(3);

        $job = Job::create([
            'title' => 'TikTok Creator',
            'short_description' =>
                'Membuka lowongan untuk talenta muda profesional ',
            'full_description' =>
                'Dynamic Space adalah perusahaan digutal marketing yang sedang berkembang, membutuhkan talenta muda profesional yang siap berkembang untuk kemajuan digital marketing di Indonesia.',
            'requirements' => ['Update tentang trend terkini','Kreatif dan memiliki banyak ide','Menguasai software software editing (Desain Grafis / Videografi)'],
            'job_nature' => 'Full-time',
            'address' => 'Sleman',
            'top_rated' => '1',
            'salary' => '2,5 - 4,5 Juta',
            'location_id' => '4',
            'company_id' => '7',
            'email' => 'fadelirsyad08@gmail.com',
            'notelp' => '0895329990656',
            'pendidikan' => 'SMA/S1/S2',
            'gender' => 'Pria/Wanita',
            'bataslamaran' => '18 Juni 2021',
            'umur' => 'Maks 22 Tahun',
            'lokasikerja' => 'Jalan  Mangkubumi No. 11 Yogyakarta'
        ]);
        $job->save();
        $job->categories()->sync(3);

        $job = Job::create([
            'title' => 'Human Resource Development',
            'short_description' =>
                'Membuka lowongan untuk Human Resource Development',
            'full_description' =>
                'Jubahakhwat saat ini membuka lowongan kerja untuk posisi sebagai Human Resource Development.',
            'requirements' => ['Pengalaman Kerja Minimal lth di Bidang HRD','Familiar Dengan Personnel Administration, Talent Development Program, Career Planing, Job Evaluation & Work Load Analysis','Berkepribadian Baik, Memiliki Skill Komunikasi, Pekerja Keras & Siap Bekerja di Bawah Tekanan'],
            'job_nature' => 'Full-time',
            'address' => 'Sleman',
            'top_rated' => '0',
            'salary' => '2,5 - 4,5 Juta',
            'location_id' => '3',
            'email' => 'fadelirsyad08@gmail.com',
            'notelp' => '0895329990656',
            'company_id' => '1',
            'pendidikan' => 'S1/S2',
            'gender' => 'Pria/Wanita',
            'bataslamaran' => '20 Juli 2021',
            'umur' => 'Maks 26 Tahun',
            'lokasikerja' => 'Jalan Melati Sorowajan No. 2 Yogyakarta'
        ]);
        $job->save();
        $job->categories()->sync(3);
    }
}
