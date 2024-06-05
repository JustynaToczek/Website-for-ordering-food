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
                    'name' => 'Kimbap', 'restaurant_id' => '1', 'price' => '10', 'description' => 'A popular Korean rolls consisting of cooked rice, seaweed, carrots, cheddar, cucumber and pickled radish', 'picture_path' => 'kimbap.png'
                ],
                [
                    'name' => 'Bibimbap', 'restaurant_id' => '1', 'price' => '9', 'description' => 'rice with carrot, zucchini, cucumber, mung bean sprouts, seasame, fried egg', 'picture_path' => 'bimbap.jpg'
                ],
                [
                    'name' => 'Classic burger', 'restaurant_id' => '2', 'price' => '8.5', 'description' => 'Classic burger with beef meat, cucmber, tomato and cheese', 'picture_path' => 'burger.jpg'
                ],
                [
                    'name' => 'Cheesy burger', 'restaurant_id' => '2', 'price' => '8.5', 'description' => 'Burger with beef meat, bacon, cucmber, tomato and 4 slices of cheese', 'picture_path' => 'cheesy_burger.jpg'
                ],
                [
                    'name' => 'Salami Pizza', 'restaurant_id' => '3', 'price' => '10', 'description' => 'Pizza with tomato sauce, mushrooms, salami, cheese', 'picture_path' => 'salami.png'
                ],
                [
                    'name' => 'Capriciosa', 'restaurant_id' => '3', 'price' => '11', 'description' => 'Pizza with tomato sauce, mushrooms, corn, cham, cheese, tomatoes', 'picture_path' => 'pizza.jpg'
                ],
                [
                    'name' => 'Zucchini cream soup', 'restaurant_id' => '4', 'price' => '6', 'description' => 'Cream soup made of zucchini, chicken brot, onions and garlic', 'picture_path' => 'zupa_z_cukinii.jpg'
                ],
                [
                    'name' => 'Gulaszowa soup', 'restaurant_id' => '4', 'price' => '5.5', 'description' => 'Soup made pork, pepper, tomato paste, carrots, onions, garilc, potatoes', 'picture_path' => 'gulaszowa.jpg'
                ],
                [
                    'name' => 'Kimbap', 'restaurant_id' => '5', 'price' => '10', 'description' => 'A popular Korean rolls consisting of cooked rice, seaweed, carrots, cheddar, cucumber and pickled radish', 'picture_path' => 'kimbap.png'
                ],
                [
                    'name' => 'Bibimbap', 'restaurant_id' => '5', 'price' => '9', 'description' => 'rice with carrot, zucchini, cucumber, mung bean sprouts, seasame, fried egg', 'picture_path' => 'bimbap.jpg'
                ],
                [
                    'name' => 'Classic burger', 'restaurant_id' => '6', 'price' => '8.5', 'description' => 'Classic burger with beef meat, cucmber, tomato and cheese', 'picture_path' => 'burger.jpg'
                ],
                [
                    'name' => 'Cheesy burger', 'restaurant_id' => '6', 'price' => '8.5', 'description' => 'Burger with beef meat, bacon, cucmber, tomato and 4 slices of cheese', 'picture_path' => 'cheesy_burger.jpg'
                ],
                [
                    'name' => 'Salami Pizza', 'restaurant_id' => '7', 'price' => '10', 'description' => 'Pizza with tomato sauce, mushrooms, salami, cheese', 'picture_path' => 'salami.png'
                ],
                [
                    'name' => 'Capriciosa', 'restaurant_id' => '7', 'price' => '11', 'description' => 'Pizza with tomato sauce, mushrooms, corn, cham, cheese, tomatoes', 'picture_path' => 'pizza.jpg'
                ],
                [
                    'name' => 'Zucchini cream soup', 'restaurant_id' => '8', 'price' => '6', 'description' => 'Cream soup made of zucchini, chicken brot, onions and garlic', 'picture_path' => 'zupa_z_cukinii.jpg'
                ],
                [
                    'name' => 'Gulaszowa soup', 'restaurant_id' => '8', 'price' => '5.5', 'description' => 'Soup made pork, pepper, tomato paste, carrots, onions, garilc, potatoes', 'picture_path' => 'gulaszowa.jpg'
                ],
            ]
        );
    }
}
