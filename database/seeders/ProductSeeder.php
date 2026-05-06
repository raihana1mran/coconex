<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Product::truncate();
        
        $products = [
            ['name' => 'Coconut Milk - Sangupoo', 'price' => 40.0, 'image' => '/storage/products/juice_pro_1-removebg-preview.png', 'color' => 'text-orange-500', 'category' => 'juice', 'flavour' => 'sangupoo'],
            ['name' => 'Coconut Milk - Karupatti', 'price' => 40.0, 'image' => '/storage/products/juice_pro_1-removebg-preview.png', 'color' => 'text-orange-500', 'category' => 'juice', 'flavour' => 'karupatti'],
            ['name' => 'Coconut Milk - Nattusakkarai', 'price' => 40.0, 'image' => '/storage/products/juice_pro_1-removebg-preview.png', 'color' => 'text-orange-500', 'category' => 'juice', 'flavour' => 'nattusakkarai'],
            ['name' => 'Rose Milk', 'price' => 40.0, 'image' => '/storage/products/juice_pro_7-removebg-preview.png', 'color' => 'text-green-500', 'category' => 'juice'],
            ['name' => 'ABC Shot', 'price' => 30.0, 'image' => '/storage/products/abc_shot-removebg-preview.png', 'color' => 'text-orange-500', 'category' => 'juice'],
            ['name' => 'Amla Shot', 'price' => 30.0, 'image' => '/storage/products/amla_shot_-removebg-preview.png', 'color' => 'text-green-500', 'category' => 'juice'],
            ['name' => 'Beetroot Shot', 'price' => 30.0, 'image' => '/storage/products/beetroot_shot-removebg-preview.png', 'color' => 'text-red-500', 'category' => 'juice'],
            ['name' => 'Carrot Shot', 'price' => 30.0, 'image' => '/storage/products/carrot_shot-removebg-preview.png', 'color' => 'text-orange-500', 'category' => 'juice'],
        ];

        foreach ($products as $product) {
            \App\Models\Product::create($product);
        }
    }
}
