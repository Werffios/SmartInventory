<?php

namespace Database\Seeders;

use App\Models\Asset;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AssetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Asset::Factory(100)->create();
        Asset::create([
            'placa' => '123457',
            'maintenance' => true,
            'maintenance_frequency' => 2,
            'category_id' => 2,
            'department_id' => 2,
            'location_id' => 2,
            'model_id' => 2,
            'status_id' => 2,
        ]);
        Asset::create([
            'placa' => '123456',
            'maintenance' => true,
            'maintenance_frequency' => 1,
            'category_id' => 1,
            'department_id' => 1,
            'location_id' => 1,
            'model_id' => 1,
            'status_id' => 1,
        ]);
    }
}
