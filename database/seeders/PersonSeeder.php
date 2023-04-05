<?php

namespace Database\Seeders;

use App\Models\Person;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Person::class::create([
            'name' => 'Nicolas',
            'last_name' => 'Suarez',
            'document' => '123456789'
        ]);
        Person::factory(20)->create();
    }
}
