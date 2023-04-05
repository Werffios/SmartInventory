<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Department::create([
            'name' => 'Departamento de Informática y Computación',
        ]);
        Department::create([
            'name' => 'Departamento de Matemáticas',
        ]);
        Department::create([
            'name' => 'Departamento de Física',
        ]);
        Department::create([
            'name' => 'Departamento de Química',
        ]);
        Department::create([
            'name' => 'Departamento de Administración',
        ]);
        Department::create([
            'name' => 'Departamento de Ingeniería Industrial',
        ]);
        Department::create([
            'name' => 'Departamento de Ingeniería Eléctrica',
        ]);
        Department::create([
            'name' => 'Departamento de Ingeniería Electrónica',
        ]);
        Department::create([
            'name' => 'Departamento de Ingeniería Civil',
        ]);
    }
}
