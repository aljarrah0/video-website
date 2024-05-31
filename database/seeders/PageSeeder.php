<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {
            Page::create([
                'name' => 'Page '.$i,
                'meta_keywords' => 'meta_keywords '.$i,
                'meta_description' => 'meta_description '.$i,
                'description' => 'description '.$i,
            ]);
        }
    }
}
