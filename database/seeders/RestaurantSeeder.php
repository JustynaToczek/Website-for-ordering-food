<?php

namespace Database\Seeders;

use App\Models\Restaurant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::withoutForeignKeyConstraints(function () {
            Restaurant::truncate();
        });

        Restaurant::insert(
            [
                [
                    'name' => 'Under Seoul', 'description' => 'Korean restaurant. Spicy and delicious food made with ingredients straight from South Korea.', 'city_id' => '2', 'picture_path' => 'bimbap.jpg'
                ],
                [
                    'name' => 'Bobby Burger', 'description' => 'The restaurant that specializes in serving high quality, crafts burgers.', 'city_id' => '2', 'picture_path' => 'burger.jpg'
                ],
                [
                    'name' => 'Torino', 'description' => 'The restaurant that serves all kinds of Italian pizza and pasta.', 'city_id' => '2', 'picture_path' => 'pizza.jpg'
                ],
                [
                    'name' => 'Soup Heaven', 'description' => 'The restaurant that serves soups from all around the world.', 'city_id' => '2', 'picture_path' => 'soup.jpg'
                ],
                [
                    'name' => 'Soup Heaven', 'description' => 'The restaurant that serves soups from all around the world.', 'city_id' => '1', 'picture_path' => 'soup.jpg'
                ],
            ]
        );
    }
}
