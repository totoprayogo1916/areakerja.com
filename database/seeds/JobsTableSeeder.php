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
        $job =  Job::create([
            'title' => 'Kameramen',
            'short_description' => 'qwertyuiopasdfghjklzxcvbnm',
            'full_description' => 'qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwweeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeerrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr',
            'requirements' => 'assssmkbdiaeeeenkjm,a s',
            'job_nature' => 'Full-time',
            'address' => 'Banguntapan jogja',
            'top_rated' => '0',
            'salary' => '10k - 20k',
            'location_id' => '1',
            'company_id' => '1',
        ]);
        $job->save();
    }
}
