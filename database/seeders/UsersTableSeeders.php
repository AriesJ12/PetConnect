<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //default value(runs when you make the migration command)
        DB::table('users')->insert([
            // admin
            [
                "name" => 'Admin',
                "email" => 'admin@gmail.com',
                "password" => Hash::make('123'),
                "birthday" => '1990-01-01',
                "role" => 'admin',
            ],
            // user
            [
                "name" => 'User',
                "email" => 'user@gmail.com',
                "password" => Hash::make('123'),
                "birthday" => '1990-01-01',
                "role" => 'user',
            ],
        ]);
    }
}
