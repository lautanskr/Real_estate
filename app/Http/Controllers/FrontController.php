<?php

namespace App\Http\Controllers;

use App\Models\RentProperty;
use Illuminate\Http\Request;
use App\Models\SaleProperty;
use App\Models\RegisteredAgent;
use App\Models\Country;
use App\Models\Province;
use App\Models\District;
use App\Models\Municipality;


class FrontController extends Controller
{
    public function ViewSale(SaleProperty $sale, RentProperty $rent, RegisteredAgent $agent, Country $country, Province $pro, District $dis, Municipality $mun)
    {
        $sale=$sale->all();
        $rent=$rent->all();
        $agent=$agent->all();
        $country = $country->all();
        $pro = $pro->all();
        $mun = $mun->all();
        return view('front_end.index', compact('sale','rent', 'agent','country','pro', 'dis', 'mun') );
    }
}
