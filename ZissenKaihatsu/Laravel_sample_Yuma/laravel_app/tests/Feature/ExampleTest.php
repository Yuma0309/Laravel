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
use Illuminate\Support\Facades\Queue;
use App\Listeners\PersonEventListener;
use Illuminate\Events\CallQueuedListener;

class ExampleTest extends TestCase
{
    public function testBasicTest()
    {
        Person::factory()->create();
        $person = Person::factory()->create();

        Queue::fake();
        Queue::assertNothingPushed();

        MyJob::dispatch($person->id)->onQueue('myjob');
            Queue::assertPushed(MyJob::class);
        Queue::assertPushedOn('myjob', MyJob::class);
    }
}
