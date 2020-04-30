<?php

namespace App\Http\Controllers\Municipality;

use App\Http\Controllers\Controller;
use App\Http\Requests\Municipality\LandUsageRequest;
use App\Municipality\LandUsage;
use App\Services\NumberConverter;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

/**
 * class LandUsageController
 * 
 * @package: App\Http\Controllers\Municipality
 * @author: Shashank Jha <shashankj677@gmail.com>
 */

class LandUsageController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view('municipality.land_usage.table')
            ->with('numberConverter', new NumberConverter)
            ->with('landUsages', LandUsage::all());
    }

    public function create() {
        return view('municipality.land_usage.create');
    }

    public function store(LandUsageRequest $request, NumberConverter $numberConverter) {
        try {
            DB::beginTransaction();

            $landUsage = new LandUsage;
            $landUsage->land_type = $request->land_type;
            $landUsage->area = $numberConverter->devanagari($request->area);
            $landUsage->percentage = $numberConverter->devanagari($request->percentage);
            $landUsage->save();

            DB::commit();

            Session::flash('success', "विवरण सफलतापूर्वक थपियो");
            return redirect()->route('municipality-surface.index');

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

    public function edit($id) {
        $landUsage = LandUsage::find($id);
        return view('municipality.land_usage.edit')
            ->with('numberConverter', new NumberConverter)
            ->with('landUsage', $landUsage);
    }

    public function update(LandUsageRequest $request, $id, NumberConverter $numberConverter) {
        $landUsage = LandUsage::find($id);
        if ($landUsage) {
            try {
                DB::beginTransaction();

                $landUsage->land_type = $request->land_type;
                $landUsage->area = $numberConverter->devanagari($request->area);
                $landUsage->percentage = $numberConverter->devanagari($request->percentage);
                $landUsage->save();

                DB::commit();

                Session::flash('success', "विवरण सफलतापूर्वक परिवर्तन गरियो");
                return redirect()->route('municipality-surface.index');
            } catch (\Exception $error) {
                DB::rollBack();
                Session::flash('error', $error->getMessage());
                return redirect()->back();
            }
        } else {
            return view('municipality.surface.not_found');
        }
        
    }

    public function delete($id) {
        return view('municipality.land_usage.delete')
            ->with('id', $id);
    }

    public function destroy($id) {
        $landUsage = LandUsage::find($id);
        if ($landUsage) {
            $landUsage->delete();
            Session::flash('success', $landUsage->land_type. " को विवरण सफलतापूर्वक हटाइएको छ");
            return redirect()->route('municipality-surface.index');
        } else {
            Session::flash('error', "डाटा हटाउन असमर्थ");
            return redirect()->route('municipality-surface.index');
        }
    }
}
