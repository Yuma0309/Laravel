<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Person;

class ExampleTest extends TestCase
{
    public function testBasicTest()
    {
        $data = [
            'id' => 1,
            'name' => 'DUMMY',
            'mail' => 'dummy@mail',
            'age' => 0,
        ];
        $person = new Person();
        $person->fill($data)->save();
        $this->assertDatabaseHas('people',$data);


        $person->name = 'NOT-DUMMY';
        $person->save();
        $this->assertDatabaseMissing('people',$data);
        $data['name'] = 'NOT-DUMMY';
        $this->assertDatabaseHas('people',$data);


        $person->delete();
        $this->assertDatabaseMissing('people',$data);
    }
}
