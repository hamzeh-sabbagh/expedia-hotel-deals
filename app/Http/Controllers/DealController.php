<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DealController extends Controller
{
    public function index(Request $filter) {

        $result = $this->getDeals($filter);
        if(!empty($result)) {
            return view('pages.deals.deal',['hotels'=> $result]);
        }

        return view('pages.deals.deal');
    }

    public function getDeals(Request $filter) {

        $params = [
            'scenario' => 'deal-finder',
            'page' => 'foo',
            'uid' => 'foo',
            'productType' => 'Hotel'
        ];

        $url_params = http_build_query(array_merge($params,$filter->all()));
        $response = json_decode(file_get_contents(env('DEALS_API_LINK') . $url_params));

        if(isset($response->offers->Hotel)) {
            return $response->offers->Hotel;
        }

        return [];
    }
}
