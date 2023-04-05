<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Status::class::create([
            'name' => 'Bueno'
        ]);
        Status::class::create([
            'name' => 'Regular'
        ]);
        Status::class::create([
            'name' => 'Malo'
        ]);
        Status::class::create([
            'name' => 'En reparación'
        ]);
        Status::class::create([
            'name' => 'Fuera de servicio'
        ]);
        Status::class::create([
            'name' => 'Prestado'
        ]);
    }
}
