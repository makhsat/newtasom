<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Brick',
                'description' => 'By a brick',
                'price' => 50,
                'quantity' => 8000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more products as needed
        ]);
    }
}
