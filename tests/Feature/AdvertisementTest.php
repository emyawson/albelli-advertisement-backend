<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AdvertisementTest extends TestCase
{

    // Trait to refresh testing tables on each run
use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_can_list_advertisements()
    {
        $this->get(route('ad.index'))
        ->assertStatus(200);
    }

    public function test_can_create_advertisements()
    {
        $adData = [
            'title' => 'My test ad',
            'link' => 'https://google.com',
            'valid_until' => '23-10-2002',
        ];

        // $this->withoutExceptionHandling();
        //$this->json('POST',route('ad.create'), $adData)
        $this->post(route('ad.create'), $adData)
        ->assertStatus(201);
    }
}
