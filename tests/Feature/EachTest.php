<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EachTest extends TestCase
{
    public function testEach()
    {
        $this->view("each", ["users" => [
            [
                "name" => "agung",
                "hobbies" => ["Coding", "Gaming"]
            ],
            [
                "name" => "vior",
                "hobbies" => ["Coding", "Gaming"]
            ]
        ]])
        ->assertSeeInOrder([
            ".red",
            "agung",
            "Coding",
            "Gaming",
            "vior",
            "Coding",
            "Gaming",
        ]);
    }
}
