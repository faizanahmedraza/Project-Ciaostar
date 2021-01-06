<?php

namespace Database\Factories;

use App\Models\Celebrity;
use Illuminate\Database\Eloquent\Factories\Factory;

class CelebrityFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Celebrity::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'celebrity_name' => $this->faker->name,
            'celebrity_email' => $this->faker->unique()->safeEmail,
            'profession' => $this->faker->company,
            'password' => $this->faker->password,
        ];
    }
}
