<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category =  Category::create([
            'name' => 'Teknologi',
        ]);
        $category->save();

        $category =  Category::create([
            'name' => 'Kesehatan',
        ]);
        $category->save();

        $category =  Category::create([
            'name' => 'Multimedia',
        ]);
        $category->save();

        $category =  Category::create([
            'name' => 'Adminitrasi',
        ]);
        $category->save();

        $category =  Category::create([
            'name' => 'Pemasaran',
        ]);
        $category->save();


    }
}
