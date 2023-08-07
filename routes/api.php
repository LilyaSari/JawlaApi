<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/countries', 'App\Http\Controllers\CountryController@index');
Route::get('/countries/{country}', 'App\Http\Controllers\CountryController@show');
Route::get('/countries/{country}/capital', 'App\Http\Controllers\CountryController@getCapital');
Route::get('/countries/{country}/cities', 'App\Http\Controllers\CountryController@getCities');

Route::get('/cities', 'App\Http\Controllers\CityController@index');
Route::get('/cities/{city}', 'App\Http\Controllers\CityController@show');
Route::get('/cities/{city}/country', 'App\Http\Controllers\CityController@getCountry');
Route::get('/cities/{city}/places', 'App\Http\Controllers\CityController@getPlaces');


Route::get('/places', 'App\Http\Controllers\PlaceController@index');
Route::get('/places/{place}', 'App\Http\Controllers\PlaceController@show');




