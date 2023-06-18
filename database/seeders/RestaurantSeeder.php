<?php

namespace Database\Seeders;

use App\Models\Restaurant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Restaurant::create([
            'name' => 'Soto Ayam Bu Siti',
            'address' => 'Soto Ayam Original, Soto Ayam Campur,...',
            'image' => 'resto3@2x.png',
            'rating' => '4.6',
        ]);

        Restaurant::create([
            'name' => 'Sate Pak Kumis',
            'address' => 'Sate Ayam, Sate Kambing, Sate Sapi,...',
            'image' => 'menu2@2x.png',
            'rating' => '4.4',
        ]);

        Restaurant::create([
            'name' => 'Warung Pak Haji',
            'address' => 'Ayam Bakar, Ayam Goreng, Ayam Madu,...',
            'image' => 'resto1@2x.png',
            'rating' => '4.8',
        ]);
    }
}
