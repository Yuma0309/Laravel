<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function testBasicTest()
    {
        $this->get('/')->assertStatus(200);
        $this->get('/hello')->assertOk();
        $this->post('/hello')->assertStatus(500);
        $this->get('/hello/1')->assertOk();
        $this->get('/hoge')->assertStatus(404);
        $this->get('/hello')->assertSeeText('Index');
        $this->get('/hello')->assertSee('h1');
        $this->get('/hello')->assertSeeInOrder(['html','head','body','h1']);
        $this->get('/hello/json/1')->assertSeeText('YAMADA-TARO');
        $this->get('/hello/json/2')->assertExactJson(
            ['id'=>2, 'name'=>'YUMA [+MYJOB]',
            'mail'=>'yuma@nakamura','age'=> 26,
            'created_at'=>'2023-11-05T00:30:12.000000Z',
            'updated_at'=>'2023-12-09T12:34:31.000000Z']);
    }
}
