<?php

namespace App\Http\Controllers\Population;

use App\Http\Controllers\Controller;
use App\Population\PopulationDensity;
use Illuminate\Http\Request;

/**
 * class PopulationDensityController
 * @package: App\Http\Controllers
 * @author: Shashank Jha <shashankj677@gmail.com>
 */

class PopulationDensityController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view('population.population_density.index');
    }

    public function create() {
        return view('population.population_density.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show(PopulationDensity $populationDensity)
    {
        //
    }

    public function edit(PopulationDensity $populationDensity)
    {
        //
    }

    public function update(Request $request, PopulationDensity $populationDensity)
    {
        //
    }

    public function destroy(PopulationDensity $populationDensity)
    {
        //
    }
}
