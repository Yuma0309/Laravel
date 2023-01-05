<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'item_name' => $this->faker->word(), //文字列
            'user_id' => $this->faker->numberBetween(1, 2), //1~2
            'item_number' => $this->faker->numberBetween(1, 999), //1~999
            'item_amount' => $this->faker->numberBetween(100, 5000), //100~5000
            'item_img' => $this->faker->image("./public/upload", 300, 300, 'cats', false),
            'published' => $this->faker->dateTime('now'), //現在までYmdHis
            'created_at' => $this->faker->dateTime('now'), //現在までYmdHis
            'updated_at' => $this->faker->dateTime('now'), //現在までYmdHis
        ];
    }
}
