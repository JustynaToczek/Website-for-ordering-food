<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::withoutForeignKeyConstraints(function () {
            User::truncate();
        });

        User::insert(
            [
                [
                    'email' => 'jan@wp.pl', 'password' => Hash::make('aaa'), 'name' => 'Jan', 'surname' => 'Kowalski', 'administrator' => '1'
                ],
                [
                    'email' => 'ala@wp.pl', 'password' => Hash::make('aaa'), 'name' => 'Ala', 'surname' => 'Kowalska', 'administrator' => '0'
                ],
            ]
        );
    }
}
