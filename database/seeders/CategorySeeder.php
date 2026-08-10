<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['name' => 'Writing', 'slug' => 'writing', 'description' => 'AI writing tools'],
            ['name' => 'Image', 'slug' => 'image', 'description' => 'Image generation tools'],
            ['name' => 'Coding', 'slug' => 'coding', 'description' => 'AI coding assistants'],
            ['name' => 'Video', 'slug' => 'video', 'description' => 'AI video tools'],
            ['name' => 'Online Tools', 'slug' => 'online-tools', 'description' => 'Useful online utilities for everyday tasks'],
        ];

        foreach ($categories as $category) {
            Category::updateOrCreate(
                ['slug' => $category['slug']],
                [
                    'name' => $category['name'],
                    'description' => $category['description'],
                    'type' => 'ai',
                    'status' => 'published',
                    'sort_order' => 0,
                    'is_featured' => true,
                ]
            );
        }
    }
}
