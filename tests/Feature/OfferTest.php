<?php

namespace Tests\Feature;

use App\Http\Controllers\AllController;
use App\Models\Advance;
use App\Models\TechStack;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Offer;

class OfferTest extends TestCase
{
    use RefreshDatabase;
    public function test_example(): void
    {
        $offers = Offer::factory(3)->create();
        $techStack = TechStack::factory(3)->create();
        $response = $this->get('/');

        $response->assertStatus(200);

    }

    public function test_example_without_id()
    {
        $offers = Offer::factory(3)->create();
        $response = $this->get('/offers/' . 2);

        $response->assertStatus(200);
    }

}
