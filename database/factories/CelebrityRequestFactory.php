<?php

namespace Database\Factories;

use App\Models\CelebrityRequest;
use Illuminate\Database\Eloquent\Factories\Factory;

class CelebrityRequestFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CelebrityRequest::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'celebrity_request_name' => $this->faker->name,
            'celebrity_request_email' => $this->faker->unique()->safeEmail,
            'charges' => $this->faker->numberBetween($min = 1000, $max = 9000),
            'accept' => $this->faker->boolean($chanceOfGettingTrue = 50),
            'decline' => $this->faker->boolean($chanceOfGettingTrue = 50),
        ];
    }
}
