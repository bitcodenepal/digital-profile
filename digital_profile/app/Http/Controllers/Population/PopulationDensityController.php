<?php

namespace App\Http\Controllers\Population;

use App\Http\Controllers\Controller;
use App\Http\Requests\Population\PopulationDensityRequest;
use App\Population\PopulationDensity;
use App\Services\NumberConverter;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

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
        return view('population.population_density.index')
            ->with('numberConverter', new NumberConverter)
            ->with('populationDensities', PopulationDensity::all());
    }

    public function create() {
        return view('population.population_density.create');
    }

    public function store(PopulationDensityRequest $request, NumberConverter $numberConverter) {
        $density = (float) $request->population/(float) $request->area;
        $density = round($density, 2);
        try {
            DB::beginTransaction();

            $populationDensity = new PopulationDensity;
            $populationDensity->ward_no = $numberConverter->devanagari($request->ward_no);
            $populationDensity->population = $numberConverter->devanagari($request->population);
            $populationDensity->population_percent = $numberConverter->devanagari($request->population_percent);
            $populationDensity->area = $numberConverter->devanagari($request->area);
            $populationDensity->area_percent = $numberConverter->devanagari($request->area_percent);
            $populationDensity->population_density = $numberConverter->devanagari($density);
            $populationDensity->save();

            DB::commit();

            Session::flash('success', "जनघनत्वको विवरण सफलतापूर्वक थपियो");
            return redirect()->route('population-density.index');
        } catch (\Exception $error) {
            DB::rollBack();
            Session::flash('error', $error->getMessage());
            return redirect()->back();
        }
    }

    public function show($id) {
        Session::flash('info', "माफ गर्नुहोस्! अनुरोध गरिएको यूआरआई फेला पार्न असमर्थ");
        return redirect()->back();
    }

    public function edit(PopulationDensity $populationDensity){
        return view('population.population_density.edit')
            ->with('numberConverter', new NumberConverter)
            ->with('populationDensity', $populationDensity);
    }

    public function update(PopulationDensityRequest $request, PopulationDensity $populationDensity, NumberConverter $numberConverter) {
        $density = (float) $request->population/(float) $request->area;
        $density = round($density, 2);
        try {
            DB::beginTransaction();

            $populationDensity->ward_no = $numberConverter->devanagari($request->ward_no);
            $populationDensity->population = $numberConverter->devanagari($request->population);
            $populationDensity->population_percent = $numberConverter->devanagari($request->population_percent);
            $populationDensity->area = $numberConverter->devanagari($request->area);
            $populationDensity->area_percent = $numberConverter->devanagari($request->area_percent);
            $populationDensity->population_density = $numberConverter->devanagari($density);
            $populationDensity->save();

            DB::commit();

            Session::flash('success', "जनघनत्वको विवरण सफलतापूर्वक परिवर्तन गरियो");
            return redirect()->route('population-density.index');
        } catch (\Exception $error) {
            DB::rollBack();
            Session::flash('error', $error->getMessage());
            return redirect()->back();
        }
    }

    public function destroy(PopulationDensity $populationDensity) {
        if ($populationDensity) {
            $populationDensity->delete();
            return response("वडा नं ".$populationDensity->ward_no. " को विवरण सफलतापूर्वक हटाइएको छ");
        } else {
            return response("डाटा हटाउन असमर्थ");
        }
    }
}
