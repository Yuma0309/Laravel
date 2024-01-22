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
        $response = $this->get('/hello');
        $content = $response->getContent();
        echo $content;
        $response->assertSeeText(
                'あなたが好きなのは、1番のリンゴですね！',
                $content);
    }
}
