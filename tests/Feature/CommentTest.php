<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CommentTest extends TestCase
{
    public function test_example()
    {
        $this->view("comment", [])
        ->assertSeeText("Comment")
        ->assertDontSeeText("agung");
    }
}
