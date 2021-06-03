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
                'qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwweeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeerrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr',
            'requirements' => 'assssmkbdiaeeeenkjm,a s',
            'job_nature' => 'Full-time',
            'address' => 'Banguntapan jogja',
            'top_rated' => '0',
            'salary' => '10k - 20k',
            'location_id' => '1',
            'company_id' => '1',
        ]);
        $job->save();

        $job = Job::create([
            'title' => 'Customer Service',
            'short_description' =>
                'Klinik Tongfang saat ini membuka lowongan kerja untuk posisi sebagai Customer Service.',
            'full_description' =>
                'qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwweeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeerrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr',
            'requirements' => 'assssmkbdiaeeeenkjm,a s',
            'job_nature' => 'Full-time',
            'address' => 'Banguntapan jogja',
            'top_rated' => '0',
            'salary' => '10jt - 20jt',
            'location_id' => '1',
            'company_id' => '1',
        ]);
        $job->save();

        $job = Job::create([
            'title' => 'Pramusaji / Pelayan di Rumah Makan',
            'short_description' =>
                'Pawon Resto adalah perusahaan yang bergerak dibidang kuliner.',
            'full_description' =>
                'qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwweeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeerrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr',
            'requirements' => 'assssmkbdiaeeeenkjm,a s',
            'job_nature' => 'Full-time',
            'address' => 'Banguntapan jogja',
            'top_rated' => '0',
            'salary' => '500k - 700k',
            'location_id' => '1',
            'company_id' => '1',
        ]);
        $job->save();
    }
}
