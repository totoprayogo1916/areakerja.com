<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoryJobTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoryjob =  CategoryJob::create([
            'job_id' => '1',
            'category_id' => '1'
        ]);
        $categoryjob->save();
    }
}
