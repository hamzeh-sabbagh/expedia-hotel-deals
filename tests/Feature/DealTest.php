<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Http\Request;
use App\Http\Controllers\DealController;

class DealTest extends TestCase
{
    /**
     * @return void
     */
    public function testGetDealsWithoutParams()
    {
        $controller = new DealController();

        $req = new Request([]);
        $deal = $controller->getDeals($req);
        $this->assertTrue(is_array($deal));
    }

    public function testGetDealsWithParams()
    {
        $controller = new DealController();

        $req = new Request(['minStarRating'=> 1,'maxStarRating' =>4,'destinationCity'=> 'Amman','lengthOfStay'=> 3]);
        $deal = $controller->getDeals($req);
        $this->assertTrue(is_array($deal));
    }
}
