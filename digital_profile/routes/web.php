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
    Route::resource('/distribution', 'Population\PopulationDistributionController');
    Route::resource('/density', 'Population\PopulationDensityController');
    Route::resource('/age', 'Population\PopulationAgeController');
    Route::resource('/mother-tongue', 'Population\MotherTongueController');
    Route::resource('/religion', 'Population\ReligionController');
    Route::resource('/caste', 'Population\CasteController');
    Route::resource('/handicap', 'Population\HandicapController');
    Route::resource('/marriage', 'Population\MarriageController');
    Route::resource('/event', 'Population\EventController');
});
// end of population routes

/**
 * Routes for economy tab
 */
Route::prefix('economy')->group(function() {
    Route::resource('/occupation', 'Economy\OccupationController');
    Route::resource('/special-education', 'Economy\SpecialEducationController');
    Route::resource('/industry', 'Economy\IndustryController');
});
// end of economy routes

/**
 * Routes for agriculture tab
 */
Route::prefix('agriculture')->group(function() {
    Route::resource('/irrigation', 'Agriculture\IrrigationController');
});
// end of agriculture routes

/**
 * Routes for tourism tab
 */
Route::prefix('tourism')->group(function() {
    Route::resource('/place', 'Tourism\PlaceController');
});
// end of tourism routes

/**
 * Routes for education tab
 */
Route::prefix('education')->group(function() {
    Route::resource('/literacy', 'Education\LiteracyController');
});
// end of education routes

/**
 * Routes for health tab
 */
Route::prefix('health')->group(function() {
    Route::resource('/hospital', 'Health\HospitalController');
});
// end of health routes

/**
 * Routes for hygiene tab
 */
Route::prefix('hygiene')->group(function() {
    Route::resource('/water', 'Hygiene\WaterController');
});
// end of hygiene routes

/**
 * Routes for Infrastructure tab
 */
Route::resource('/infrastructure-road', 'Infrastructure\RoadController');
Route::resource('/infrastructure-bridge', 'Infrastructure\BridgeController');
Route::resource('/infrastructure-path', 'Infrastructure\PathController');
Route::resource('/infrastructure-fuel-gas', 'Infrastructure\Fuel\GasController');
Route::resource('/infrastructure-fuel-electricity', 'Infrastructure\Fuel\ElectricityController');
Route::get('/infrastructure-fuel-electricity/delete/{id}', 'Infrastructure\Fuel\ElectricityController@delete')->name('infrastructure-fuel-electricity.delete');
// end of infrastructure routes
