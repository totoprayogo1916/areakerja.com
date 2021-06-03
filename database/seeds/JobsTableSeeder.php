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
            'short_description' => 'qwertyuiopasdfghjklzxcvbnm',
            'full_description' =>
                'qqqqqqqqqqqqqqqqqwwwwwwwwwweeeeeeeeeeeeeeeeeeeeeeeeeerrrrrrrrrrrrrrrrrrrrrrrrrrr',
            'requirements' => 'assssmkbdiaeeeenkjmas',
            'job_nature' => 'Full-time',
            'address' => 'Banguntapan',
            'top_rated' => '0',
            'salary' => '10k - 20k',
            'location_id' => '3',
            'company_id' => '1',
        ]);
        $job->save();
        $job->categories()->sync(3);

        $job = Job::create([
            'title' => 'Customer Service',
            'short_description' =>
                'membuka lowongan kerja untuk posisi sebagai Customer Service.',
            'full_description' =>
                'qqqqqqqqqqqqqqqqqqqqqwwwwwwwwwwweeeeeeeeeeeeeeeeeeerrrrrrrrrrrrrrrrrrrrrrrrrrrr',
            'requirements' => 'assssmkbdiaeeeenkjm,a s',
            'job_nature' => 'Full-time',
            'address' => 'Banguntapan jogja',
            'top_rated' => '0',
            'salary' => '10jt - 20jt',
            'location_id' => '3',
            'company_id' => '1',
        ]);
        $job->save();
        $job->categories()->sync(4);

        $job = Job::create([
            'title' => 'Pramusaji / Pelayan di Rumah Makan',
            'short_description' =>
                'Pawon Resto adalah perusahaan yang bergerak dibidang kuliner.',
            'full_description' =>
                'qqqqqqqwwwwweeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeerrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr',
            'requirements' => 'assssmkbdiaeeeenkjm,a s',
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
                'qqqqqqqqqqqqqqqqqqwwwwwwwwwwwwwwwwwwwwwwweeeeeerrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr',
            'requirements' => 'assssmkbdiaeeeenkjasdfghjkl',
            'job_nature' => 'Full-time',
            'address' => 'DIY',
            'top_rated' => '0',
            'salary' => '800k - 1jt',
            'location_id' => '1',
            'company_id' => '1',
        ]);
        $job->save();
        $job->categories()->sync(4);

        $job = Job::create([
            'title' => 'Content Creator',
            'short_description' =>
                'membuka lowongan kerja untuk posisi sebagai Content Creator.',
            'full_description' =>
                'qqqqqqqqqqqqqqwwwwwwwwwwwwwwwweeeeeerrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr',
            'requirements' => 'Tingkat Pendidikan : SMA/SMK, D3, S1',
            'job_nature' => 'Full-time',
            'address' => 'Bantul',
            'top_rated' => '0',
            'salary' => '800k - 1jt',
            'location_id' => '3',
            'company_id' => '1',
        ]);
        $job->save();
        $job->categories()->sync(1);

        $job = Job::create([
            'title' => 'Desainer',
            'short_description' =>
                'Nimco adalah perusahaan yang bergerak di bidang fashion (DISTRO)',
            'full_description' =>
                'Membuka kesempatan berkarir bagi para profesional muda yang aktif untuk bergabung bersama kami di posisi Desainer.',
            'requirements' => 'Tingkat Pendidikan : D3, S1',
            'job_nature' => 'Full-time',
            'address' => 'Sleman',
            'top_rated' => '0',
            'salary' => '1 jt - 1,2 jt',
            'location_id' => '2',
            'company_id' => '1',
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
            'company_id' => '1',
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
            'company_id' => '1',
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
            'company_id' => '1',
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
            'company_id' => '1',
        ]);
        $job->save();
        $job->categories()->sync(3);
    }
}
