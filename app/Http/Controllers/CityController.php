<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index()
    {
        $cities = City::all();
        return response()->json($cities);

    }

    public function show(City $city)
    {
        return response()->json($city);
    }

    public function getCountry(City $city)
    {
        $country = $city->country;
        return response()->json($country);
    }

    public function getPlaces(City $city)
    {
        $places = $city->places;
        return response()->json($places);
    }
}
