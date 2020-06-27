<?php

namespace App\Http\Controllers\Population;

use App\Http\Controllers\Controller;
use App\Http\Requests\Population\PopulationDistributionRequest;
use App\Population\PopulationDistribution;
use App\Services\NumberConverter;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Barryvdh\DomPDF\Facade as PDF;

/**
 * class PopulationDistributionController
 * @package: App\Http\Controllers
 * @author: Shashank Jha <shashankj677@gmail.com>
 */

class PopulationDistributionController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index(NumberConverter $numberConverter) {
        $totalHouseHoldNumber = $totalPopulation = $totalMale = $totalFemale = $totalAverageFamily = $totalGenderRatio = 0;
        $i = 0;
        $populationDistributions = PopulationDistribution::all();
        foreach ($populationDistributions as $populationDistribution) {
            $totalHouseHoldNumber += $numberConverter->english($populationDistribution->household_number);
            $totalPopulation += $numberConverter->english($populationDistribution->total);
            $totalMale += $numberConverter->english($populationDistribution->male_number);
            $totalFemale += $numberConverter->english($populationDistribution->female_number);
            $totalAverageFamily += $numberConverter->english($populationDistribution->average_family);
            $totalGenderRatio += $numberConverter->english($populationDistribution->gender_ratio);
            $i++;
        }
        return view('population.population_distribution.index')
            ->with('populationDistributions', $populationDistributions)
            ->with('totalHouseHoldNumber', $numberConverter->devanagari($totalHouseHoldNumber))
            ->with('totalPopulation', $numberConverter->devanagari($totalPopulation))
            ->with('totalMale', $numberConverter->devanagari($totalMale))
            ->with('totalFemale', $numberConverter->devanagari($totalFemale))
            ->with('totalAverageFamily', ($i == 0) ? 0 : $numberConverter->devanagari(round($totalAverageFamily/$i, 2)))
            ->with('totalGenderRatio', ($i == 0) ? 0 : $numberConverter->devanagari(round($totalGenderRatio/$i, 2)));
    }

    public function create() {
        return view('population.population_distribution.create');
    }

    public function store(PopulationDistributionRequest $request, NumberConverter $numberConverter) {
        try {
            DB::beginTransaction();

            $populationDistribution = new PopulationDistribution;
            $populationDistribution->ward_no = $numberConverter->devanagari($request->ward_no);
            $populationDistribution->household_number = $numberConverter->devanagari($request->household_number);
            $populationDistribution->male_number = $numberConverter->devanagari($request->male_number);
            $populationDistribution->female_number = $numberConverter->devanagari($request->female_number);
            $total = (int) $request->male_number + (int) $request->female_number;
            $populationDistribution->total = $numberConverter->devanagari($total);
            $average_family = $total/(int) $request->household_number;
            $populationDistribution->average_family = $numberConverter->devanagari(round($average_family, 2));
            $gender_ratio = ((int) $request->male_number/(int) $request->female_number)*100;
            $populationDistribution->gender_ratio = $numberConverter->devanagari(round($gender_ratio, 2));
            $populationDistribution->save();

            DB::commit();

            Session::flash('success', "जनसंख्या वितरण सफलतापूर्वक थपियो");
            return redirect()->route('distribution.index');

        } catch (\Exception $error) {
            DB::rollBack();
            Session::flash('error', $error->getMessage());
            return redirect()->back();
        }
    }

    public function show() {
        return redirect()->back();
    }

    public function edit($id) {
        $populationDistribution = PopulationDistribution::find($id);
        if ($populationDistribution) {
            return view('population.population_distribution.edit')
                ->with('numberConverter', new NumberConverter)
                ->with('populationDistribution', $populationDistribution);
        } else {
            return view('population.population_distribution.not_found');
        }
    }

    public function update(PopulationDistributionRequest $request, $id, NumberConverter $numberConverter) {
        try {
            $populationDistribution = PopulationDistribution::find($id);
            DB::beginTransaction();

            $populationDistribution->ward_no = $numberConverter->devanagari($request->ward_no);
            $populationDistribution->household_number = $numberConverter->devanagari($request->household_number);
            $populationDistribution->male_number = $numberConverter->devanagari($request->male_number);
            $populationDistribution->female_number = $numberConverter->devanagari($request->female_number);
            $total = (int) $request->male_number + (int) $request->female_number;
            $populationDistribution->total = $numberConverter->devanagari($total);
            $average_family = $total/(int) $request->household_number;
            $populationDistribution->average_family = $numberConverter->devanagari(round($average_family, 2));
            $gender_ratio = ((int) $request->male_number/(int) $request->female_number)*100;
            $populationDistribution->gender_ratio = $numberConverter->devanagari(round($gender_ratio, 2));
            $populationDistribution->save();

            DB::commit();

            Session::flash('success', "जनसंख्या वितरण सफलतापूर्वक परिवर्तन गरियो");
            return redirect()->route('distribution.index');

        } catch (\Exception $error) {
            DB::rollBack();
            Session::flash('error', $error->getMessage());
            return redirect()->back();
        }
    }

    public function destroy($id) {
        $populationDistribution = PopulationDistribution::find($id);
        if ($populationDistribution) {
            $populationDistribution->delete();
            return response("वडा नं ".$populationDistribution->ward_no. " को विवरण सफलतापूर्वक हटाइएको छ");
        } else {
            return response("डाटा हटाउन असमर्थ");
        }

    }

    public function exportPDF(NumberConverter $numberConverter) {
        $populationDistributions = PopulationDistribution::all();
        set_time_limit(300);
        ini_set("memory_limit", "256M");
        $pdf = PDF::loadView('population.population_distribution._exportPDF', compact('populationDistributions', 'numberConverter'))->setPaper('a4', 'portrait');
        return $pdf->stream('population distribution.pdf');
    }
}
