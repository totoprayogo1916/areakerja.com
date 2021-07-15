<?php

use Database\Seeders\ArticleSeeder;
use Database\Seeders\MitraSeeder;
use Database\Seeders\OrganisasiSeeder;
use Database\Seeders\PengalamanSeeder;
use Database\Seeders\SertifikasiSeeder;
use Database\Seeders\RiwayatPendidikanSeeder;
use Database\Seeders\PriceSeeder;
use Database\Seeders\SkillSeeder;
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
            KandidatSeeder::class,
            OrganisasiSeeder::class,
            PengalamanSeeder::class,
<<<<<<< HEAD
            RiwayatPendidikanSeeder::class,
            SertifikasiSeeder::class,
=======
            SkillSeeder::class,
            MitraSeeder::class,
>>>>>>> 05f3b9a0fc2f0a7681ebc99e43fa754285991be1
        ]);
    }
}
