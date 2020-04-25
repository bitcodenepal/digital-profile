<?php

namespace App\Http\Controllers\Population;

use App\Http\Controllers\Controller;
use App\Population\PopulationDetail;
use Illuminate\Http\Request;

/**
 * class PopulationDetailController
 * @package: App\Http\Controllers
 * @author: Shashank Jha <shashankj677@gmail.com>
 */

class PopulationDetailController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view('population.population_detail.index');
    }


    public function create() {
        return view('population.population_detail.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show(PopulationDetail $populationDetail)
    {
        //
    }

    public function edit(PopulationDetail $populationDetail)
    {
        //
    }

    public function update(Request $request, PopulationDetail $populationDetail)
    {
        //
    }

    public function destroy(PopulationDetail $populationDetail)
    {
        //
    }
}
