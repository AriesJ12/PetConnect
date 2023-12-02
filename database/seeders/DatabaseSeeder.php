<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\PetTypeSeeder;
use Database\Seeders\BreedsTableSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // runs the seeders
        $this->call([
            UsersTableSeeders::class,
            PetTypeSeeder::class,
            BreedsTableSeeder::class,
        ]);
        \App\Models\User::factory(10)->create();
        \App\Models\Pet::factory(10)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
