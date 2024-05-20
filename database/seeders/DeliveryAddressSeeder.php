<?php

namespace Database\Seeders;

use App\Models\Delivery_address;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DeliveryAddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::withoutForeignKeyConstraints(function () {
            Delivery_address::truncate();
        });

        Delivery_address::insert(
            [
                [
                    'city_id' => '2', 'street_name' => 'Rejtana 2', 'flat_number' => '23', 'phone_number' => '333222111'
                ]
            ]
        );
    }
}
