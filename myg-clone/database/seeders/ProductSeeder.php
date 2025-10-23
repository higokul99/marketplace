<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'iPhone 15',
                'description' => 'The latest iPhone with a new design and improved cameras.',
                'price' => 999.99,
                'image' => 'https://via.placeholder.com/200',
                'category_id' => 1,
            ],
            [
                'name' => 'MacBook Pro',
                'description' => 'A powerful laptop for professionals.',
                'price' => 1999.99,
                'image' => 'https://via.placeholder.com/200',
                'category_id' => 2,
            ],
            [
                'name' => 'iPad Pro',
                'description' => 'A versatile tablet with a stunning display.',
                'price' => 799.99,
                'image' => 'https://via.placeholder.com/200',
                'category_id' => 3,
            ],
            [
                'name' => 'AirPods Pro',
                'description' => 'Wireless earbuds with active noise cancellation.',
                'price' => 249.99,
                'image' => 'https://via.placeholder.com/200',
                'category_id' => 4,
            ],
        ]);
    }
}
