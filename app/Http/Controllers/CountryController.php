<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index()
    {
        $countries = Country::all();
        return response()->json($countries);
    }

    public function show(Country $country)
    {
        return response()->json($country);
    }
    public function getCapital(Country $country)
    {
        $capital = $country->capital;
        return response()->json($capital);
    }
    public function getCities(Country $country)
    {
        $cities = $country->cities;
        return response()->json($cities);
    }
}
