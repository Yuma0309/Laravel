<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Database\Eloquent\Factory;
use Tests\TestCase;
use Database\Seeders\DatabaseSeeder;
use App\Models\Person;
use Illuminate\Support\Facades\Bus;
use App\Jobs\MyJob;
use Illuminate\Support\Facades\Event;
use App\Events\PersonEvent;

class ExampleTest extends TestCase
{
    public function testBasicTest()
    {
        Person::factory()->create();
        $person = Person::factory()->create();

        Event::fake();
        $this->get('/hello/' . $person->id)->assertOk();
        Event::assertDispatched(PersonEvent::class);
    }
}
