<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BreedsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('breeds')->insert([
            ['type_id' => 1, 'name' => 'Aspin'],
            ['type_id' => 1, 'name' => 'Shih Tzu'],
            ['type_id' => 1, 'name' => 'Pomeranian'],
            ['type_id' => 1, 'name' => 'Labrador Retriever'],
            ['type_id' => 1, 'name' => 'German Shepherd'],
            ['type_id' => 1, 'name' => 'Golden Retriever'],
            ['type_id' => 1, 'name' => 'Rottweiler'],
            ['type_id' => 1, 'name' => 'Chihuahua'],
            ['type_id' => 1, 'name' => 'Bulldog'],
            ['type_id' => 1, 'name' => 'Dalmatian'],
            ['type_id' => 1, 'name' => 'Beagle'],
            ['type_id' => 1, 'name' => 'Boxer'],
            ['type_id' => 1, 'name' => 'Doberman Pinscher'],
            ['type_id' => 1, 'name' => 'Siberian Husky'],
            ['type_id' => 1, 'name' => 'Pug'],
            ['type_id' => 1, 'name' => 'Cocker Spaniel'],
            ['type_id' => 1, 'name' => 'Australian Shepherd'],
            ['type_id' => 1, 'name' => 'Poodle'],
            ['type_id' => 1, 'name' => 'Bichon Frise'],
            ['type_id' => 2, 'name' => 'Persian'],
            ['type_id' => 2, 'name' => 'Siamese'],
            ['type_id' => 2, 'name' => 'Maine Coon'],
            ['type_id' => 2, 'name' => 'Bengal'],
            ['type_id' => 2, 'name' => 'Puspin'],
            ['type_id' => 2, 'name' => 'Scottish Fold'],
            ['type_id' => 2, 'name' => 'British Shorthair'],
            ['type_id' => 2, 'name' => 'Ragdoll'],
            ['type_id' => 2, 'name' => 'Sphynx'],
            ['type_id' => 2, 'name' => 'Norwegian Forest Cat'],
            ['type_id' => 2, 'name' => 'Russian Blue'],
            ['type_id' => 2, 'name' => 'Exotic Shorthair'],
            ['type_id' => 2, 'name' => 'Persian Chinchilla'],
            ['type_id' => 2, 'name' => 'Himalayan'],
            ['type_id' => 2, 'name' => 'Devon Rex'],
            ['type_id' => 2, 'name' => 'Manx'],
            ['type_id' => 2, 'name' => 'Cornish Rex'],
            ['type_id' => 2, 'name' => 'Tonkinese'],
            ['type_id' => 2, 'name' => 'Burmese'],
            ['type_id' => 2, 'name' => 'Abyssinian'],
        ]);
    }
}
