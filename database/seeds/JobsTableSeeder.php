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
            'requirements' => ['Toni Abbah','Anastacia Mast','Soji Igbonna'],
            'job_nature' => 'Full-time',
            'address' => 'Banguntapan',
            'top_rated' => '1',
            'salary' => '10k - 20k',
            'location_id' => '3',
            'company_id' => '2',
            'email' => 'hehe@gmail.com',
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
            'requirements' => ['Toni Abbah','Anastacia Mast','Soji Igbonna'],
            'job_nature' => 'Full-time',
            'address' => 'Banguntapan jogja',
            'top_rated' => '1',
            'salary' => '10jt - 20jt',
            'location_id' => '3',
            'company_id' => '6',
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
            'requirements' => ['Toni Abbah','Anastacia Mast','Soji Igbonna'],
            'job_nature' => 'Full-time',
            'address' => 'Banguntapan jogja',
            'top_rated' => '0',
            'salary' => '500k - 700k',
            'location_id' => '3',
            'company_id' => '1',
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
            'requirements' => ['Toni Abbah','Anastacia Mast','Soji Igbonna'],
            'job_nature' => 'Full-time',
            'address' => 'DIY',
            'top_rated' => '1',
            'salary' => '800k - 1jt',
            'location_id' => '1',
            'company_id' => '6',
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
            'requirements' => ['Toni Abbah','Anastacia Mast','Soji Igbonna'],
            'job_nature' => 'Full-time',
            'address' => 'Bantul',
            'top_rated' => '0',
            'salary' => '800k - 1jt',
            'location_id' => '3',
            'company_id' => '2',
            'pendidikan' => 'SMA/S1/S2',
            'gender' => 'Pria/Wanita',
            'bataslamaran' => '20 Juni 2021',
            'umur' => 'Maks 20 Tahun',
            'lokasikerja' => 'Jalan Kanoman No. 20 Banguntapan Yogyakarta'
        ]);
        $job->save();
        $job->categories()->sync(1);

        $job = Job::create([
            'title' => 'Desainer',
            'short_description' =>
                'Jogja Tailor adalah perusahaan yang bergerak di bidang fashion',
            'full_description' =>
                'Membuka kesempatan berkarir bagi para profesional muda yang aktif untuk bergabung bersama kami di posisi Desainer.',
            'requirements' => ['Toni Abbah','Anastacia Mast','Soji Igbonna'],
            'job_nature' => 'Full-time',
            'address' => 'Sleman',
            'top_rated' => '1',
            'salary' => '1 jt - 1,2 jt',
            'location_id' => '2',
            'company_id' => '4',
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
            'requirements' => ['Toni Abbah','Anastacia Mast','Soji Igbonna'],
            'job_nature' => 'Full-time',
            'address' => 'Bantul',
            'top_rated' => '0',
            'salary' => '500k',
            'location_id' => '3',
            'company_id' => '3',
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
            'requirements' => ['Toni Abbah','Anastacia Mast','Soji Igbonna'],
            'job_nature' => 'Full-time',
            'address' => 'Sleman',
            'top_rated' => '0',
            'salary' => '900k',
            'location_id' => '2',
            'company_id' => '2',
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
            'requirements' => ['Toni Abbah','Anastacia Mast','Soji Igbonna'],
            'job_nature' => 'Full-time',
            'address' => 'DIY',
            'top_rated' => '0',
            'salary' => '4 - 5 Juta',
            'location_id' => '1',
            'company_id' => '5',
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
            'requirements' => ['Toni Abbah','Anastacia Mast','Soji Igbonna'],
            'job_nature' => 'Full-time',
            'address' => 'Sleman',
            'top_rated' => '0',
            'salary' => '2,5 - 4,5 Juta',
            'location_id' => '2',
            'company_id' => '2',
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
            'requirements' => ['Toni Abbah','Anastacia Mast','Soji Igbonna'],
            'job_nature' => 'Full-time',
            'address' => 'Sleman',
            'top_rated' => '1',
            'salary' => '2,5 - 4,5 Juta',
            'location_id' => '4',
            'company_id' => '7',
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
            'requirements' => ['Toni Abbah','Anastacia Mast','Soji Igbonna'],
            'job_nature' => 'Full-time',
            'address' => 'Sleman',
            'top_rated' => '0',
            'salary' => '2,5 - 4,5 Juta',
            'location_id' => '3',
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
