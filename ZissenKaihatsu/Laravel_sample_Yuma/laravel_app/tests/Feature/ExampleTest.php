<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function testBasicTest()
    {
        $data = [
            'id' => 1,
            'name' => 'YAMADA-TARO',
            'mail' => 'taro@yamada',
            'age' => '34'
        ];
        $this->assertDatabaseHas('people',$data);
        $data['id'] =2; //★
        $this->assertDatabaseMissing('people', $data);
    }
}
