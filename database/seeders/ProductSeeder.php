<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            [
                'name' => 'English for Kids',
                'category' => 'English',
                'description' => 'Learn English vocabulary and daily conversations.',
                'level' => 'Beginner',
                'duration' => '3 months',
                'price' => 350000,
                'image' => 'images/products/english-kids.jpg',
                'is_active' => true,
            ],
            [
                'name' => 'English Conversation',
                'category' => 'English',
                'description' => 'Practice speaking English with confidence.',
                'level' => 'Intermediate',
                'duration' => '4 months',
                'price' => 450000,
                'image' => 'images/products/english-conversation.jpg',
                'is_active' => true,
            ],
            [
                'name' => 'English Grammar',
                'category' => 'English',
                'description' => 'Understand English grammar and sentence structure.',
                'level' => 'Beginner',
                'duration' => '3 months',
                'price' => 400000,
                'image' => 'images/products/english-grammar.jpg',
                'is_active' => true,
            ],
            [
                'name' => 'Calistung Basic',
                'category' => 'Calistung',
                'description' => 'Learn basic reading, writing, and counting.',
                'level' => 'Beginner',
                'duration' => '3 months',
                'price' => 300000,
                'image' => 'images/products/calistung-basic.jpg',
                'is_active' => true,
            ],
            [
                'name' => 'Calistung Fun Class',
                'category' => 'Calistung',
                'description' => 'Practice literacy and numeracy through fun activities.',
                'level' => 'Beginner',
                'duration' => '4 months',
                'price' => 325000,
                'image' => 'images/products/calistung-fun.jpg',
                'is_active' => true,
            ],
            [
                'name' => 'Mathematics Basic',
                'category' => 'Mathematics',
                'description' => 'Understand numbers and basic mathematical operations.',
                'level' => 'Beginner',
                'duration' => '3 months',
                'price' => 350000,
                'image' => 'images/products/math-basic.jpg',
                'is_active' => true,
            ],
            [
                'name' => 'Mathematics Advanced',
                'category' => 'Mathematics',
                'description' => 'Improve logical thinking and problem-solving skills.',
                'level' => 'Advanced',
                'duration' => '4 months',
                'price' => 500000,
                'image' => 'images/products/math-advanced.jpg',
                'is_active' => true,
            ],
            [
                'name' => 'Coding for Kids',
                'category' => 'Coding',
                'description' => 'Discover programming through beginner-friendly projects.',
                'level' => 'Beginner',
                'duration' => '3 months',
                'price' => 450000,
                'image' => 'images/products/coding-kids.jpg',
                'is_active' => true,
            ],
            [
                'name' => 'Web Development',
                'category' => 'Coding',
                'description' => 'Learn the fundamentals of building websites.',
                'level' => 'Intermediate',
                'duration' => '5 months',
                'price' => 650000,
                'image' => 'images/products/web-development.jpg',
                'is_active' => true,
            ],
            [
                'name' => 'Creative Programming',
                'category' => 'Coding',
                'description' => 'Build creative digital projects while learning code.',
                'level' => 'Intermediate',
                'duration' => '4 months',
                'price' => 550000,
                'image' => 'images/products/creative-programming.jpg',
                'is_active' => true,
            ],
        ];

        foreach ($products as $product) {
            Product::updateOrCreate(
                ['name' => $product['name']],
                $product
            );
        }
    }
}
