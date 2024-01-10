<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Database\Eloquent\Factory;
use Tests\TestCase;
use Database\Seeders\DatabaseSeeder;
use App\Models\Person;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    public function testBasicTest()
    {
        for($i = 0;$i < 100;$i++)
        {
            Person::factory()->create();
        }
        $count = Person::get()->count();
        $person = Person::find(rand(1, $count));
        $data = $person->toArray();
        print_r($data);


        $this->assertDatabaseHas('people', $data);


        $person->delete();
        $this->assertDatabaseMissing('people', $data);
    }
}
