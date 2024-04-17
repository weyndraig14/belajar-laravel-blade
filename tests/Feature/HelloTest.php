<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HelloTest extends TestCase
{
    public function testHello()
    {
        $this->get("/hello")
        ->assertSeeText("agung");
    }

    public function testHelloWorld()
    {
        $this->get("/world")
        ->assertSeeText("agung");
    }

    public function testHelloView()
    {
        $this->view("hello", ["name" => "agung"])
        ->assertSeeText("agung");
    }

    public function testHelloWorldView()
    {
        $this->view("hello.world", ["name" => "agung"])
        ->assertSeeText("agung");
    }
}
