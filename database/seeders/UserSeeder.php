<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\UserDetail;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::insert([
            [
                'name'  => 'Admin',
                'email' => 'admin@admin.com',
                'password'  => bcrypt('12345678'),
                'access_label'  => 2
            ],
            [
                'name'  => 'Teacher',
                'email' => 'teacher@admin.com',
                'password'  => bcrypt('12345678'),
                'access_label'  => 1
            ],
            [
                'name'  => 'User',
                'email' => 'user@admin.com',
                'password'  => bcrypt('12345678'),
                'access_label'  => 0
            ]
        ]);

        UserDetail::insert([
            [
                'user_id'   => 1,
            ],

            [
                'user_id'   => 2,
            ],

            [
            'user_id'   => 3,
            ]
        ]);
    }
}
