<?php

namespace Database\Seeders;

use App\Models\Dish;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::withoutForeignKeyConstraints(function () {
            Dish::truncate();
        });

        Dish::insert(
            [
                [
                    'name' => 'Kimbap', 'restaurant_id' => '1', 'price' => '10', 'picture_path' => 'kimbap.png'
                ],
                [
                    'name' => 'Bibimbap', 'restaurant_id' => '1', 'price' => '9', 'picture_path' => 'bimbap.jpg'
                ],
                [
                    'name' => 'Classic burger', 'restaurant_id' => '2', 'price' => '8.5', 'picture_path' => 'burger.jpg'
                ],
                [
                    'name' => 'Cheesy burger', 'restaurant_id' => '2', 'price' => '8.5', 'picture_path' => 'cheesy_burger.jpg'
                ],
                [
                    'name' => 'Salami Pizza', 'restaurant_id' => '3', 'price' => '10', 'picture_path' => 'salami.png'
                ],
                [
                    'name' => 'Capriciosa', 'restaurant_id' => '3', 'price' => '11', 'picture_path' => 'pizza.jpg'
                ],
                [
                    'name' => 'Zucchini cream soup', 'restaurant_id' => '4', 'price' => '6', 'picture_path' => 'zupa_z_cukinii.jpg'
                ],
                [
                    'name' => 'Tomato soup', 'restaurant_id' => '4', 'price' => '5.5', 'picture_path' => 'gulaszowa.jpg'
                ],
            ]
        );
    }
}
