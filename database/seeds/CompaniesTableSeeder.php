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
        $company =  Company::create([
            'name' => 'Areakerja',
        ]);
        $company->save();

        $company =  Company::create([
            'name' => 'Seven Inc',
        ]);
        $company->save();

        $company =  Company::create([
            'name' => 'KopiSoe',
        ]);
        $company->save();

        $company =  Company::create([
            'name' => 'Jogja Tailor',
        ]);
        $company->save();

        $company =  Company::create([
            'name' => 'The Oxalis Regency Hotel',
        ]);
        $company->save();

        $company =  Company::create([
            'name' => 'JW Media Production',
        ]);
        $company->save();

        $company =  Company::create([
            'name' => 'Dynamic Space',
        ]);
        $company->save();

    }
}
