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
        $list = [];
        for($i = 0;$i < 10;$i++)
        {
            $p1 = Person::factory()->create();
            $p2 = Person::factory()->upper()->create();
            $p3 = Person::factory()->lower()->create();
            $p4 = Person::factory()->upper()->lower()->create();
            $list = array_merge($list, [$p1->id, $p2->id, $p3->id, $p4->id]);
        }

        for($i = 0;$i < 10;$i++)
        {
            shuffle($list);
            $item = array_shift($list);
            $person = Person::find($item);
            $data = $person->toArray();
            print_r($data);

            $this->assertDatabaseHas('people', $data);

            $person->delete();
            $this->assertDatabaseMissing('people', $data);
        }
    }
}
