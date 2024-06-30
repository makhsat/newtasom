<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderStatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('order_statuses')->insert([
            ['status_name' => 'Pending', 'description' => 'Order is pending'],
            ['status_name' => 'Processing', 'description' => 'Order is being processed'],
            ['status_name' => 'Completed', 'description' => 'Order is completed'],
            ['status_name' => 'Cancelled', 'description' => 'Order is cancelled'],
        ]);
    }
}
