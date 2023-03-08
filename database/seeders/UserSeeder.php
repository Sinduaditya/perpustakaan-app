<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username' => 'Admin',
            'password' => bcrypt('password'),
            'alamat' => 'Jalan Admin Admin',
            'no_user' => '7979',
            'no_telepon' => '567897',
            'roles' => 'Admin',


            'username' => 'Siswa',
            'password' => bcrypt('password'),
            'alamat' => 'jalan siswa',
            'no_user' => '9797',
            'no_telepon' => '45768979',
            'roles' => 'Member',
        ]);
    }
}