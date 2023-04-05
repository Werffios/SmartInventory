<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Brand::class::create([
            'name' => 'Apple'
        ]);
        Brand::class::create([
            'name' => 'Sony'
        ]);
        Brand::class::create([
            'name' => 'Samsung'
        ]);
        Brand::class::create([
            'name' => 'HP'
        ]);
        Brand::class::create([
            'name' => 'Lenovo'
        ]);
        Brand::class::create([
            'name' => 'Dell'
        ]);
        Brand::class::create([
            'name' => 'Acer'
        ]);
        Brand::class::create([
            'name' => 'LG'
        ]);
    }
}
