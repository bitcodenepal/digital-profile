<?php

namespace App\Http\Controllers\Population;

use App\Population\PopulationAge;
use App\Http\Controllers\Controller;
use App\Http\Requests\Population\PopulationAgeRequest;
use App\Services\NumberConverter;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

/**
 * class PopulationAgeController
 * @package: App\Http\Controllers
 * @author: Shashank Jha <shashankj677@gmail.com>
 */

class PopulationAgeController extends Controller
{
    public function index() {
        return view('population.population_age.index')
            ->with('numberConverter', new NumberConverter)
            ->with('populationAges', PopulationAge::all());
    }

    public function create() {
        return view('population.population_age.create');
    }

    public function store(PopulationAgeRequest $request, NumberConverter $numberConverter) {
        try {
            DB::beginTransaction();

            $populationAge = new PopulationAge;
            $populationAge->ward_no = $numberConverter->devanagari($request->ward_no);
            $populationAge->male_five = $numberConverter->devanagari($request->male_five);
            $populationAge->female_five = $numberConverter->devanagari($request->female_five);
            $populationAge->male_six = $numberConverter->devanagari($request->male_six);
            $populationAge->female_six = $numberConverter->devanagari($request->female_six);
            $populationAge->male_fifteen = $numberConverter->devanagari($request->male_fifteen);
            $populationAge->female_fifteen = $numberConverter->devanagari($request->female_fifteen);
            $populationAge->male_nineteen = $numberConverter->devanagari($request->male_nineteen);
            $populationAge->female_nineteen = $numberConverter->devanagari($request->female_nineteen);
            $populationAge->male_twenty_five = $numberConverter->devanagari($request->male_twenty_five);
            $populationAge->female_twenty_five = $numberConverter->devanagari($request->female_twenty_five);
            $populationAge->male_fifty = $numberConverter->devanagari($request->male_fifty);
            $populationAge->female_fifty = $numberConverter->devanagari($request->female_fifty);
            $populationAge->male_sixty = $numberConverter->devanagari($request->male_sixty);
            $populationAge->female_sixty = $numberConverter->devanagari($request->female_sixty);
            $populationAge->male_seventy = $numberConverter->devanagari($request->male_seventy);
            $populationAge->female_seventy = $numberConverter->devanagari($request->female_seventy);
            $populationAge->save();

            DB::commit();

            Session::flash('success', "विवरण सफलतापूर्वक थपियो");
            return redirect()->route('population-age.index');

        } catch (\Exception $error) {
            DB::rollBack();
            Session::flash('error', $error->getMessage());
            return redirect()->back();
        }
    }


    public function show(PopulationAge $populationAge) {
        Session::flash('info', "माफ गर्नुहोस्! अनुरोध गरिएको यूआरआई फेला पार्न असमर्थ");
        return redirect()->back();
    }

    public function edit(PopulationAge $populationAge) {
        return view('population.population_age.edit')
            ->with('numberConverter', new NumberConverter)
            ->with('populationAge', $populationAge);
    }

    public function update(PopulationAgeRequest $request, PopulationAge $populationAge, NumberConverter $numberConverter) {
        try {
            DB::beginTransaction();

            $populationAge->ward_no = $numberConverter->devanagari($request->ward_no);
            $populationAge->male_five = $numberConverter->devanagari($request->male_five);
            $populationAge->female_five = $numberConverter->devanagari($request->female_five);
            $populationAge->male_six = $numberConverter->devanagari($request->male_six);
            $populationAge->female_six = $numberConverter->devanagari($request->female_six);
            $populationAge->male_fifteen = $numberConverter->devanagari($request->male_fifteen);
            $populationAge->female_fifteen = $numberConverter->devanagari($request->female_fifteen);
            $populationAge->male_nineteen = $numberConverter->devanagari($request->male_nineteen);
            $populationAge->female_nineteen = $numberConverter->devanagari($request->female_nineteen);
            $populationAge->male_twenty_five = $numberConverter->devanagari($request->male_twenty_five);
            $populationAge->female_twenty_five = $numberConverter->devanagari($request->female_twenty_five);
            $populationAge->male_fifty = $numberConverter->devanagari($request->male_fifty);
            $populationAge->female_fifty = $numberConverter->devanagari($request->female_fifty);
            $populationAge->male_sixty = $numberConverter->devanagari($request->male_sixty);
            $populationAge->female_sixty = $numberConverter->devanagari($request->female_sixty);
            $populationAge->male_seventy = $numberConverter->devanagari($request->male_seventy);
            $populationAge->female_seventy = $numberConverter->devanagari($request->female_seventy);
            $populationAge->save();

            DB::commit();

            Session::flash('success', "विवरण सफलतापूर्वक परिवर्तन गरियो");
            return redirect()->route('population-age.index');

        } catch (\Exception $error) {
            DB::rollBack();
            Session::flash('error', $error->getMessage());
            return redirect()->back();
        }
    }

    public function destroy(PopulationAge $populationAge) {
        if ($populationAge) {
            $populationAge->delete();
            return response("वडा नं ".$populationAge->ward_no. " को विवरण सफलतापूर्वक हटाइएको छ");
        } else {
            return response("डाटा हटाउन असमर्थ");
        }
    }
}
