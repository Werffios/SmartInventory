<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Department;
use App\Models\Location;
use App\Models\Model_Asset;
use App\Models\Status;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Asset>
 */
class AssetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'placa' => $this->faker->unique()->randomNumber(6),
            'maintenance' => $this->faker->boolean(),
            'maintenance_frequency' => $this->faker->numberBetween(1, 4),
            'category_id' => Category::all()->random()->id,
            'department_id' => Department::all()->random()->id,
            'location_id' => Location::all()->random()->id,
            'model_id' => Model_Asset::all()->random()->id,
            'status_id' => Status::all()->random()->id,
        ];
    }
}
