<?php

use Database\Seeders\ArtikelSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            ArtikelSeeder::class,
            PermissionsTableSeeder::class,
            RolesTableSeeder::class,
            PermissionRoleTableSeeder::class,
            UsersTableSeeder::class,
            RoleUserTableSeeder::class,
            CategoriesTableSeeder::class,
            LocationsTableSeeder::class,
            CompaniesTableSeeder::class,
            JobsTableSeeder::class,
        ]);
    }
}
