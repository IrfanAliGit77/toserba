<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = array(
            [
                'name' => 'Administrator',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('password'),
                'foto' => '/img/user.jpg',
                'level' => 1
            ],
            [
                'name' => 'Galiley Singgang M.Y',
                'email' => 'galiley@gmail.com',
                'password' => bcrypt('password'),
                'foto' => '/img/user.jpg',
                'level' => 2
            ],
            [
                'name' => 'Muh. Irfan Ali',
                'email' => 'irfan@gmail.com',
                'password' => bcrypt('password'),
                'foto' => '/img/user.jpg',
                'level' => 2
            ]
        );

        array_map(function (array $user) {
            User::query()->updateOrCreate(
                ['email' => $user['email']],
                $user
            );
        }, $users);
    }
}
