<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PetTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('pet_types')->insert([
            ['type_id' => 1, 'name' => 'Dog'],
            ['type_id' => 2, 'name' => 'Cat'],
        ]);
    }
}
