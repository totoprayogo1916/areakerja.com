<?php

use App\Company;
use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $company = Company::create([
            'name'   => 'Areakerja',
            'gambar' => 'Areakerja.jpeg',
        ]);
        $company->save();

        $company = Company::create([
            'name'   => 'Seven Inc',
            'gambar' => 'Seven Inc.png',
        ]);
        $company->save();

        $company = Company::create([
            'name'   => 'KopiSoe',
            'gambar' => 'kopisoe.png',
        ]);
        $company->save();

        $company = Company::create([
            'name'   => 'Jogja Tailor',
            'gambar' => 'Jogja Tailor.png',
        ]);
        $company->save();

        $company = Company::create([
            'name'   => 'The Oxalis Regency Hotel',
            'gambar' => 'The Oxalis Regency Hotel.png',
        ]);
        $company->save();

        $company = Company::create([
            'name'   => 'JW Media Production',
            'gambar' => 'JW Media Production.jpg',
        ]);
        $company->save();

        $company = Company::create([
            'name'   => 'Dynamic Space',
            'gambar' => 'Dynamic Space.png',
        ]);
        $company->save();
    }
}
