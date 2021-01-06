<?php

namespace Database\Factories;

use App\Models\Enroll;
use Illuminate\Database\Eloquent\Factories\Factory;

class EnrollFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Enroll::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstNameMale,
            'email' => $this->faker->unique()->safeEmail,
            'phone_number' => $this->faker->e164PhoneNumber,
            'profession' => $this->faker->jobTitle,
            'price' => $this->faker->numberBetween($min = 500, $max = 2000),
            'stage_number' => $this->faker->randomDigitNotNull,
            'social_media' => $this->faker->url, // password
            'followers' => $this->faker->randomDigitNotNull,
        ];
    }
}
