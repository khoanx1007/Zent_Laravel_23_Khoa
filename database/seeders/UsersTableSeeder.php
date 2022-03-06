<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        $users = [
            [
                'id' => '1',
                'name' => 'Admin1',
                'email' => 'khoa1@gmail.com',
                'password' => bcrypt('4114523')
            ],
            [
                'id' => '2',
                'name' => 'Admin2',
                'email' => 'khoa2@gmail.com',
                'password' => bcrypt('32412512')
            ],
            [
                'id' => '3',
                'name' => 'Admin3',
                'email' => 'khoa3@gmail.com',
                'password' => bcrypt('1234214')
            ],
            [
                'id' => '4',
                'name' => 'Admin4',
                'email' => 'khoa4@gmail.com',
                'password' => bcrypt('4123234')
            ],
            [
                'id' => '5',
                'name' => 'Admin5',
                'email' => 'khoa5@gmail.com',
                'password' => bcrypt('4124124')
            ]
        ];
        foreach($users as $user)
        {
            DB::table('users')->insert($user);
        }
    }
}
