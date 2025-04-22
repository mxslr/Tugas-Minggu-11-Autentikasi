<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::create([
            'name' => 'Nasi Goreng',
            'description' => 'Nasi goreng dengan ayam dan telur.',
            'price' => 20000
        ]);

        Product::create([
            'name' => 'Mie Ayam',
            'description' => 'Mie ayam dengan bakso dan pangsit.',
            'price' => 18000
        ]);

        Product::create([
            'name' => 'Sate Ayam',
            'description' => '10 tusuk sate ayam dengan lontong.',
            'price' => 25000
        ]);
    }
}
