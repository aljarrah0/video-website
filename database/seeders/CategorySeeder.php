<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {
            Category::create([
                'name' => 'Category '.$i,
                'meta_keywords' => 'meta_keywords '.$i,
                'meta_description' => 'meta_description '.$i,
            ]);
        }
    }
}
