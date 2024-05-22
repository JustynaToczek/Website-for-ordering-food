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
                    'town' => 'Rzeszow', 'street_name' => 'Rejtana 2', 'flat_number' => '23', 'phone_number' => '333222111', 'user_id' => 2
                ]
            ]
        );
    }
}
