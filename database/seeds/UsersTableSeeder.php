<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$p2lAE/PWMuS6r/5BWo/uDOE/6ju0WeKff9J7AqHmzSLnd4yRSTljy',
                'remember_token' => null,
            ],
            [
                'id'             => 2,
                'name'           => 'Mitra',
                'email'          => 'mitra@mitra.com',
                'password'       => '$2y$10$p2lAE/PWMuS6r/5BWo/uDOE/6ju0WeKff9J7AqHmzSLnd4yRSTljy',
                'remember_token' => null,
            ],

            [
                'id'             => 3,
                'name'           => 'Mitra',
                'email'          => 'fadelirsyad04@gmail.com',
                'password'       => '$2y$10$p2lAE/PWMuS6r/5BWo/uDOE/6ju0WeKff9J7AqHmzSLnd4yRSTljy',
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}
