<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::withoutForeignKeyConstraints(function () {
            Order::truncate();
        });

        Order::insert(
            [
                [
                    'user_id' => '1', 'address_id' => '1', 'date' => '2024-05-18 12:00:00', 'total_price' => '19'
                ]
            ]
        );
    }
}
