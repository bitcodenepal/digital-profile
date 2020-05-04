<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');

/**
 * Routes for municipality tabs
 */
Route::group(['middleware' => 'auth'], function() {
    Route::get('/municipality-geography', function() {
        return view('municipality.geography');
    })->name('municipality-geography');
});

Route::resource('/municipality-surface', 'Municipality\SurfaceController');
Route::resource('/municipality-land-usage', 'Municipality\LandUsageController');
Route::get('/municipality-land-usage/delete/{id}', 'Municipality\LandUsageController@delete')->name('municipality-land-usage.delete');

// end of municipality routes

/**
 * Routes for population tab
 */
Route::prefix('population')->group(function() {
    Route::resource('/detail', 'Population\PopulationDetailController');
    Route::resource('/distribution', 'Population\PopulationDistributionController');
    Route::resource('/density', 'Population\PopulationDensityController');
    Route::resource('/age', 'Population\PopulationAgeController');
    Route::resource('/mother-tongue', 'Population\MotherTongueController');
    Route::resource('/religion', 'Population\ReligionController');
    Route::resource('/caste', 'Population\CasteController');
});
// end of population routes

/**
 * Routes for Infrastructure tab
 */
Route::resource('/infrastructure-road', 'Infrastructure\RoadController');
Route::resource('/infrastructure-bridge', 'Infrastructure\BridgeController');
Route::resource('/infrastructure-path', 'Infrastructure\PathController');
Route::resource('/infrastructure-fuel-gas', 'Infrastructure\Fuel\GasController');
Route::resource('/infrastructure-fuel-electricity', 'Infrastructure\Fuel\ElectricityController');
Route::get('/infrastructure-fuel-electricity/delete/{id}', 'Infrastructure\Fuel\ElectricityController@delete')->name('infrastructure-fuel-electricity.delete');
//
