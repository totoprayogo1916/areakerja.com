<?php

use Database\Seeders\ArticleSeeder;
use Database\Seeders\KandidatSeeder;
use Database\Seeders\MitraSeeder;
use Database\Seeders\OrganisasiSeeder;
use Database\Seeders\PriceSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            ArticleSeeder::class,
            PermissionsTableSeeder::class,
            RolesTableSeeder::class,
            PermissionRoleTableSeeder::class,
            UsersTableSeeder::class,
            RoleUserTableSeeder::class,
            CategoriesTableSeeder::class,
            LocationsTableSeeder::class,
            CompaniesTableSeeder::class,
            JobsTableSeeder::class,
            PriceSeeder::class,
            MitraSeeder::class,
            KandidatSeeder::class,
            OrganisasiSeeder::class,
        ]);
    }
}
