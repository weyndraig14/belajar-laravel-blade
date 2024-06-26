<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FormTest extends TestCase
{
    public function testForm()
    {
        $this->view("form", ['user' => [
            "premium" => true,
            "name" => "agung",
            "admin" => true
        ]])
        ->assertSee("checked")
        ->assertSee("agung")
        ->assertDontSee("readonly");

        $this->view("form", ['user' => [
            "premium" => false,
            "name" => "agung",
            "admin" => false
        ]])
        ->assertDontSee("checked")
        ->assertSee("agung")
        ->assertSee("readonly");
    }
}
