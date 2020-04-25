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
Route::resource('/population-detail', 'Population\PopulationDetailController');
Route::resource('/population-distribution', 'Population\PopulationDistributionController');
Route::resource('/population-density', 'Population\PopulationDensityController');

// end of population routes
