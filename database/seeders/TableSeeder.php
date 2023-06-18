<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (range(1, 30) as $i) {
            \App\Models\Table::create([
                'restaurant_id' => 1,
                'code' => 'TBL' . $i,
            ]);
        }
    }
}
