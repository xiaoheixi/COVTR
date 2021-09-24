<?php

namespace Database\Factories;

use App\Models\LockedDownLocations;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class LocationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\LockedDownLocations::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Location' => $this->faker->Location,
            'Days' => $this->faker->Days,
            'created_at' => now(),
        ];
    }
}
