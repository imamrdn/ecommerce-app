<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => 'Smartphone X',
                'description' => 'Powerful smartphone with advanced features',
                'price' => 12000000,
                'quantity' => 34,
                'image' => 'image-product.jpg',
            ],
            [
                'name' => 'Laptop Y',
                'description' => 'High-performance laptop for professionals',
                'price' => 25000000,
                'quantity' => 100,
                'image' => 'image-product.jpg',
            ],
            [
                'name' => 'Tablet Z',
                'description' => 'Portable tablet with long-lasting battery',
                'price' => 8000000,
                'quantity' => 0,
                'image' => 'image-product.jpg',
            ],
            [
                'name' => 'Smartwatch A',
                'description' => 'Smartwatch with health monitoring features',
                'price' => 3000000,
                'quantity' => 0,
                'image' => 'image-product.jpg',
            ],
            [
                'name' => 'Headphones B',
                'description' => 'Wireless headphones for immersive audio experience',
                'price' => 1500000,
                'quantity' => 0,
                'image' => 'image-product.jpg',
            ],

        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
