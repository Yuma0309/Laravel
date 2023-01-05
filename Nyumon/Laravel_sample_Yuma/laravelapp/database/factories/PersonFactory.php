<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Person;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class PersonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Person::class;
    
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'mail' => $this->faker->unique()->safeEmail(),
            'age' => random_int(1,99),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
