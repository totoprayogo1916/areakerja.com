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
            'name'      => 'Areakerja',
            'deskripsi' => 'Areakerja merupakan perusahaan untuk mencari kerja',
            'alamat'    => 'Jl. Kampar',
            'gambar'    => 'Areakerja.jpeg',
            'slug'      => 'areakerja',
        ]);
        $company->save();

        $company = Company::create([
            'name'   => 'Seven Inc',
            'gambar' => 'Seven Inc.png',
            'slug'   => 'seven-inc',
        ]);
        $company->save();

        $company = Company::create([
            'name'   => 'KopiSoe',
            'gambar' => 'kopisoe.png',
            'slug'   => 'kopisoe',
        ]);
        $company->save();

        $company = Company::create([
            'name'   => 'Jogja Tailor',
            'gambar' => 'Jogja Tailor.png',
            'slug'   => 'jogja-tailor',
        ]);
        $company->save();

        $company = Company::create([
            'name'   => 'The Oxalis Regency Hotel',
            'gambar' => 'The Oxalis Regency Hotel.png',
            'slug'   => 'the-oxalis-regency-hotel',
        ]);
        $company->save();

        $company = Company::create([
            'name'   => 'JW Media Production',
            'gambar' => 'JW Media Production.jpg',
            'slug'   => 'jw-media-production',
        ]);
        $company->save();

        $company = Company::create([
            'name'   => 'Dynamic Space',
            'gambar' => 'Dynamic Space.png',
            'slug'   => 'dynamic-space',
        ]);
        $company->save();
    }
}
