<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Person;

class PersonFactory extends Factory
{
    protected $model = Person::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'mail' => $this->faker->email,
            'age' => $this->faker->numberBetween(1, 100),
        ];
    }
}
