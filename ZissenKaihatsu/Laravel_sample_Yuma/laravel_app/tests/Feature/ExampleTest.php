<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Database\Seeders\DatabaseSeeder;
use App\Models\Person;

class ExampleTest extends TestCase
{
    public function testBasicTest()
    {
        $this->seed(DatabaseSeeder::class);
        $person = Person::find(1);
        $data = $person->toArray();


        $this->assertDatabaseHas('people', $data);


        $person->delete();
        $this->assertDatabaseMissing('people', $data);
    }
}
