<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Http\Request;
use App\Http\Controllers\DealController;

class HomeTest extends TestCase
{
    /**
     * @return void
     */

    public function testGetDeals()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
