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
                    'dish_name' => 'Kimbap', 'restaurant_id' => '1', 'dish_price' => '10', 'picture_path' => 'kimbap.png'
                ],
                [
                    'dish_name' => 'Bibimbap', 'restaurant_id' => '1', 'dish_price' => '9', 'picture_path' => 'bimbap.jpg'
                ],
                [
                    'dish_name' => 'Classic burger', 'restaurant_id' => '2', 'dish_price' => '8.5', 'picture_path' => 'burger.jpg'
                ],
                [
                    'dish_name' => 'Cheesy burger', 'restaurant_id' => '2', 'dish_price' => '8.5', 'picture_path' => 'cheesy_burger.jpg'
                ],
                [
                    'dish_name' => 'Salami Pizza', 'restaurant_id' => '3', 'dish_price' => '10', 'picture_path' => 'salami.png'
                ],
                [
                    'dish_name' => 'Capriciosa', 'restaurant_id' => '3', 'dish_price' => '11', 'picture_path' => 'pizza.jpg'
                ],
                [
                    'dish_name' => 'Zucchini cream soup', 'restaurant_id' => '4', 'dish_price' => '6', 'picture_path' => 'zupa_z_cukinii.jpg'
                ],
                [
                    'dish_name' => 'Tomato soup', 'restaurant_id' => '4', 'dish_price' => '5.5', 'picture_path' => 'gulaszowa.jpg'
                ],
            ]
        );
    }
}
