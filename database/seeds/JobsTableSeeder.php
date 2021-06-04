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
            'requirements' => 'Handal shoot dan mengerti kamera',
            'job_nature' => 'Full-time',
            'address' => 'Banguntapan',
            'top_rated' => '0',
            'salary' => '10k - 20k',
            'location_id' => '3',
            'company_id' => '2',
        ]);
        $job->save();
        $job->categories()->sync(3);

        $job = Job::create([
            'title' => 'Customer Service',
            'short_description' =>
                'Membuka lowongan kerja untuk posisi sebagai Customer Service.',
            'full_description' =>
                'JW Media Production saat ini membuka lowongan kerja untuk posisi sebagai Customer Service.',
            'requirements' => 'Wanita menutup aurat, Usia minimal 20 tahun, Minima; lulusan SMA/ Sederajt, Memiliki komunikasi yang baik,
                Terbiasa fast reson, Good Vibes, bersemangat dan good attitude, Bisa bekerja tim dan di bawah tekanan,
                Mampu bekerja target, Mempunyai pengalaman sesuai bidang',
            'job_nature' => 'Full-time',
            'address' => 'Banguntapan jogja',
            'top_rated' => '0',
            'salary' => '10jt - 20jt',
            'location_id' => '3',
            'company_id' => '6',
        ]);
        $job->save();
        $job->categories()->sync(4);

        $job = Job::create([
            'title' => 'Pramusaji / Pelayan di Rumah Makan',
            'short_description' =>
                'Pawon Resto adalah perusahaan yang bergerak dibidang kuliner.',
            'full_description' =>
                'Pawon Resto adalah perusahaan yang bergerak dibidang kuliner.',
            'requirements' => 'Menyiapkan pesanan customer, Menerima Pembayaran, Membuat laporan setiap harinya.',
            'job_nature' => 'Full-time',
            'address' => 'Banguntapan jogja',
            'top_rated' => '0',
            'salary' => '500k - 700k',
            'location_id' => '3',
            'company_id' => '1',
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
            'requirements' => 'Tingkat Pendidikan: SMA/SMK, D3, S1',
            'job_nature' => 'Full-time',
            'address' => 'DIY',
            'top_rated' => '0',
            'salary' => '800k - 1jt',
            'location_id' => '1',
            'company_id' => '6',
        ]);
        $job->save();
        $job->categories()->sync(4);

        $job = Job::create([
            'title' => 'Content Creator',
            'short_description' =>
                'membuka lowongan kerja untuk posisi sebagai Content Creator.',
            'full_description' =>
                'Saat ini membuka lowongan kerja untuk posisi sebagai Content Creator.',
            'requirements' => 'Wanita usia 35 tahun, Good communication skill, Kreatif dalam membuat konten sosmed, Familiar menggunakan sosmed terutama FB & IG,
                Menguasai software & aplikasi design dan editing foto (misal Adobe,Corel, Al, aplikasi Canva dll),
                Jujur dan tanggung jawab',
            'job_nature' => 'Full-time',
            'address' => 'Bantul',
            'top_rated' => '0',
            'salary' => '800k - 1jt',
            'location_id' => '3',
            'company_id' => '2',
        ]);
        $job->save();
        $job->categories()->sync(1);

        $job = Job::create([
            'title' => 'Desainer',
            'short_description' =>
                'Jogja Tailor adalah perusahaan yang bergerak di bidang fashion',
            'full_description' =>
                'Membuka kesempatan berkarir bagi para profesional muda yang aktif untuk bergabung bersama kami di posisi Desainer.',
            'requirements' => 'Tingkat Pendidikan : D3, S1',
            'job_nature' => 'Full-time',
            'address' => 'Sleman',
            'top_rated' => '0',
            'salary' => '1 jt - 1,2 jt',
            'location_id' => '2',
            'company_id' => '4',
        ]);
        $job->save();
        $job->categories()->sync(3);

        $job = Job::create([
            'title' => 'Barista - Waiters - Cashier',
            'short_description' =>
                'membuka lowongan kerja untuk posisi sebagai Barista, Waiters, Cashier.',
            'full_description' =>
                'membuka lowongan kerja untuk posisi sebagai Barista, Waiters, Cashier.',
            'requirements' => 'Tingkat Pendidikan : SMA/SMK',
            'job_nature' => 'Full-time',
            'address' => 'Bantul',
            'top_rated' => '0',
            'salary' => '500k',
            'location_id' => '3',
            'company_id' => '3',
        ]);
        $job->save();
        $job->categories()->sync(5);

        $job = Job::create([
            'title' => 'Videographer',
            'short_description' =>
                'PT. Kata Suhu Kita dengan brand SUHU Consulting and Training merupakah sebuah perusahaan yang bergerak di bidang jasa pelatihan dan konsultasi IT dan SDM.',
            'full_description' =>
                'SUHU mengajak talenta-talenta muda yang mempunyai semangat tinggi untuk bergabung menjadi keluarga baru kami',
            'requirements' => 'Tingkat Pendidikan : D3, S1',
            'job_nature' => 'Full-time',
            'address' => 'Sleman',
            'top_rated' => '0',
            'salary' => '900k',
            'location_id' => '2',
            'company_id' => '2',
        ]);
        $job->save();
        $job->categories()->sync(3);

        $job = Job::create([
            'title' => 'Food and Beverage Manager',
            'short_description' =>
                'The Oxalis Regency Hotel ini berjarak 2 KM dari Borobudur International Golf & Country Club',
            'full_description' =>
                'The Oxalis Regency Hotel ini berjarak 2 KM dari Borobudur International Golf & Country Club',
            'requirements' => 'Tingkat Pendidikan : D3, S1',
            'job_nature' => 'Full-time',
            'address' => 'DIY',
            'top_rated' => '0',
            'salary' => '4 - 5 Juta',
            'location_id' => '1',
            'company_id' => '5',
        ]);
        $job->save();
        $job->categories()->sync(4);

        $job = Job::create([
            'title' => 'Editor Video',
            'short_description' =>
                'JW Media Production adalah pengelola website dan beberapa channel Youtube yang berlokasi di Yogyakarta.',
            'full_description' =>
                'Saat ini, kami membuka kesempatan bagi orang-orang dengan kreativitas tinggi untuk bergabung dan berkarir dengan tim kami.',
            'requirements' => 'Tingkat Pendidikan : SMA/SMK, D3, S1',
            'job_nature' => 'Full-time',
            'address' => 'Sleman',
            'top_rated' => '0',
            'salary' => '2,5 - 4,5 Juta',
            'location_id' => '2',
            'company_id' => '2',
        ]);
        $job->save();
        $job->categories()->sync(3);

        $job = Job::create([
            'title' => 'TikTok Creator',
            'short_description' =>
                'Membuka lowongan untuk talenta muda profesional ',
            'full_description' =>
                'Dynamic Space adalah perusahaan digutal marketing yang sedang berkembang, membutuhkan talenta muda profesional yang siap berkembang untuk kemajuan digital marketing di Indonesia.',
            'requirements' => 'Tingkat Pendidikan : SMA/SMK, D3, S1',
            'job_nature' => 'Full-time',
            'address' => 'Sleman',
            'top_rated' => '0',
            'salary' => '2,5 - 4,5 Juta',
            'location_id' => '4',
            'company_id' => '7',
        ]);
        $job->save();
        $job->categories()->sync(3);

        $job = Job::create([
            'title' => 'Human Resource Development',
            'short_description' =>
                'Membuka lowongan untuk Human Resource Development',
            'full_description' =>
                'Jubahakhwat saat ini membuka lowongan kerja untuk posisi sebagai Human Resource Development.',
            'requirements' => 'Tingkat Pendidikan : SMA/SMK, D3, S1',
            'job_nature' => 'Full-time',
            'address' => 'Sleman',
            'top_rated' => '0',
            'salary' => '2,5 - 4,5 Juta',
            'location_id' => '3',
            'company_id' => '1',
        ]);
        $job->save();
        $job->categories()->sync(3);
    }
}
