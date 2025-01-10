<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Measurement;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $brands = Brand::pluck('id')->toArray();
        $categories = Category::pluck('id')->toArray();
        $measurements = Measurement::pluck('id')->toArray();

        return [
            'name' => $this->faker->words(rand(1, 3), true),
            'slug' => $this->faker->slug(2),
            'description' => $this->faker->text(),
            'price' => $this->faker->randomNumber([15,900]).'000',
            'brand_id' => $this->faker->randomElement($brands),
            'category_id' => $this->faker->randomElement($categories),
            'measurement_id' => $this->faker->randomElement($measurements),
        ];
    }
}
