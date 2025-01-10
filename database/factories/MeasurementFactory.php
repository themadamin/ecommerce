<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Measurement>
 */
class MeasurementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'unit' => $this->randomUnit(),
            'precision' => 0
        ];
    }

    public function randomUnit(): string
    {
        $units = [
            'kg',
            'gr',
            'sm',
            'm',
        ];

        return $units[array_rand($units)];
    }
}
