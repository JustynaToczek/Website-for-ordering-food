<?php

namespace Database\Seeders;

use App\Models\Ordered_dish;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class OrderedDishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::withoutForeignKeyConstraints(function () {
            Ordered_dish::truncate();
        });

        Ordered_dish::insert(
            [
                [
                    'order_id' => '1', 'dish_id' => '1', 'quantity' => '1'
                ],
                [
                    'order_id' => '1', 'dish_id' => '2', 'quantity' => '2'
                ],
            ]
        );
    }
}
