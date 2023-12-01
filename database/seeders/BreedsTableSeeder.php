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
            ['type' => 'Dog', 'name' => 'Aspin'],
            ['type' => 'Dog', 'name' => 'Shih Tzu'],
            ['type' => 'Dog', 'name' => 'Pomeranian'],
            ['type' => 'Dog', 'name' => 'Labrador Retriever'],
            ['type' => 'Dog', 'name' => 'German Shepherd'],
            ['type' => 'Dog', 'name' => 'Golden Retriever'],
            ['type' => 'Dog', 'name' => 'Rottweiler'],
            ['type' => 'Dog', 'name' => 'Chihuahua'],
            ['type' => 'Dog', 'name' => 'Bulldog'],
            ['type' => 'Dog', 'name' => 'Dalmatian'],
            ['type' => 'Dog', 'name' => 'Beagle'],
            ['type' => 'Dog', 'name' => 'Boxer'],
            ['type' => 'Dog', 'name' => 'Doberman Pinscher'],
            ['type' => 'Dog', 'name' => 'Siberian Husky'],
            ['type' => 'Dog', 'name' => 'Pug'],
            ['type' => 'Dog', 'name' => 'Cocker Spaniel'],
            ['type' => 'Dog', 'name' => 'Australian Shepherd'],
            ['type' => 'Dog', 'name' => 'Poodle'],
            ['type' => 'Dog', 'name' => 'Bichon Frise'],
            ['type' => 'Cat', 'name' => 'Persian'],
            ['type' => 'Cat', 'name' => 'Siamese'],
            ['type' => 'Cat', 'name' => 'Maine Coon'],
            ['type' => 'Cat', 'name' => 'Bengal'],
            ['type' => 'Cat', 'name' => 'Puspin'],
            ['type' => 'Cat', 'name' => 'Scottish Fold'],
            ['type' => 'Cat', 'name' => 'British Shorthair'],
            ['type' => 'Cat', 'name' => 'Ragdoll'],
            ['type' => 'Cat', 'name' => 'Sphynx'],
            ['type' => 'Cat', 'name' => 'Norwegian Forest Cat'],
            ['type' => 'Cat', 'name' => 'Russian Blue'],
            ['type' => 'Cat', 'name' => 'Exotic Shorthair'],
            ['type' => 'Cat', 'name' => 'Persian Chinchilla'],
            ['type' => 'Cat', 'name' => 'Himalayan'],
            ['type' => 'Cat', 'name' => 'Devon Rex'],
            ['type' => 'Cat', 'name' => 'Manx'],
            ['type' => 'Cat', 'name' => 'Cornish Rex'],
            ['type' => 'Cat', 'name' => 'Tonkinese'],
            ['type' => 'Cat', 'name' => 'Burmese'],
            ['type' => 'Cat', 'name' => 'Abyssinian'],
        ]);
    }
}
