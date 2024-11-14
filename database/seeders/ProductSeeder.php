<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Product::create([
            'name' => 'Laptop',
            'description' => 'Laptop',
            'sku' => 'Laptop',
            'price' => 100000,
            'stock' => 10,
            'category_id' => 1
        ]);
    }
}
