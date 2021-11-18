<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Training;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class TrainingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Training::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->title(),
            'price' => $this->faker->numberBetween([5000, 60000]),
            'cover' => $this->faker->image(),
            'description' => $this->faker->sentence(),
            'is_paid' => $this->faker->boolean(),
            'online' => $this->faker->boolean(),
            'with_certification' => $this->faker->boolean(),
            'start_at' => $this->faker->dateTimeBetween('+2 days', '+2 weeks'),
            'end_at' => $this->faker->dateTimeBetween('+2 weeks', '+3 weeks'),
            'lat' => $this->faker->latitude(),
            'lon' => $this->faker->longitude(),
            'address' => $this->faker->address(),
            'category_id' => function () {
                return Category::factory()->create()->id;
            },
            'advertiser_id' => function () {
                return User::factory()->create()->id;
            }
        ];
    }
}
