<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Database\Eloquent\Factory;
use Tests\TestCase;
use Database\Seeders\DatabaseSeeder;
use App\Models\Person;
use Illuminate\Support\Facades\Bus;
use App\Jobs\MyJob;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    public function testBasicTest()
    {
        $id = 1;
        $data = [
            'id' => $id,
            'name' => 'DUMMY',
            'mail' => 'dummy@mail',
            'age' => 0,
        ];
        $person = new Person();
        $person->fill($data)->save();
        $this->assertDatabaseHas('people',$data);

        Bus::fake();
        MyJob::dispatch($id);

        Bus::assertDispatched(MyJob::class, 
            function($job) use ($id)
        {
            $p = Person::find($id)->first();
            return $job->getPersonId() == $p->id;
        });
    }
}
