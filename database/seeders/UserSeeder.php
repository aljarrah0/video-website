<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'mohammed aljarrah',
            'email' => 'moh.moh.aljarrah@gmail.com',
            'phone' => '01015379148',
            'password' => Hash::make('moh.moh.aljarrah@gmail.com'),
        ]);

        User::factory()->count(10)->create();
    }
}
