<?php

namespace Database\Seeders;

use App\Models\Responsible;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ResponsibleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Responsible::class::create([
            'start_date' => '2021-01-01',
            'end_date' => '2021-12-31',
            'asset_id' => 1,
            'person_id' => 1
        ]);
        Responsible::class::create([
            'start_date' => '2022-01-01',
            'end_date' => '2022-12-31',
            'asset_id' => 2,
            'person_id' => 2
        ]);
        Responsible::factory(3)->create();
    }
}
