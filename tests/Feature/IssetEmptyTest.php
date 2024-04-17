<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IssetEmptyTest extends TestCase
{
    public function test_example()
    {
        $this->view("isset-empty", [])
        ->assertDontSeeText("Hello")
        ->assertSeeText("I don't have any hobbies.", false);

        $this->view("isset-empty", ["name" => "agung"])
        ->assertSeeText("Hello, my name is agung")
        ->assertSeeText("I don't have any hobbies.", false);

        $this->view("isset-empty", ["name" => "agung", "hobbies" => ["Coding"]])
        ->assertSeeText("Hello, my name is agung")
        ->assertDontSeeText("I don't have any hobbies.", false);
    }
}
