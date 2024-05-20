<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::withoutForeignKeyConstraints(function () {
            City::truncate();
        });

        City::insert(
            [
                [
                    'city_name' => 'Warsaw'
                ],
                [
                    'city_name' => 'Rzeszow'
                ],
                [
                    'city_name' => 'Gdansk'
                ],
                [
                    'city_name' => 'Wroclaw'
                ],
            ]
        );
    }
}
