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

    public function upper()
    {
        return $this->state(function (array $attributes) {
            return [
                'name' => strtoupper($this->faker->name),
            ];
        });
    }

    public function lower()
    {
        return $this->state(function (array $attributes) {
            return [
                'name' => strtolower($this->faker->name),
            ];
        });
    }

    public function configure()
    {
        return $this->afterMaking(function (Person $person) {
            $person->name .= ' [making]';
            $person->save();
        })->afterCreating(function (Person $person) {
            $person->name .= ' [creating]';
            $person->save();
        });
    }
}
