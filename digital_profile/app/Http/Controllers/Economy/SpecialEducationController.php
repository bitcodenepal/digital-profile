<?php

namespace App\Http\Controllers\Economy;

use App\Economy\SpecialEducation;
use App\Http\Controllers\Controller;
use App\Http\Requests\Economy\SpecialEducationRequest;
use App\Services\NumberConverter;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class SpecialEducationController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view('economy.special_education.index')
            ->with('specialEducations', SpecialEducation::all())
            ->with('numberConverter', new NumberConverter);
    }

    public function create() {
        return view('economy.special_education.create');
    }

    public function store(SpecialEducationRequest $request) {
        try {
            $allArray = $request->all();
            $slicedArray = array_slice($allArray, 2);
            $allArray['total'] = array_sum($slicedArray);

            DB::beginTransaction();
            SpecialEducation::create($allArray);
            DB::commit();

            Session::flash('success', 'विवरण सफलतापूर्वक थपियो');
            return redirect()->route('special-education.index');
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
        $specialEducation = SpecialEducation::findOrFail($id);
        return view('economy.special_education.edit')
            ->with('specialEducation', $specialEducation);
    }

    public function update(SpecialEducationRequest $request, $id) {
        try {
            $specialEducation = SpecialEducation::findOrFail($id);

            $allArray = $request->all();
            $slicedArray = array_slice($allArray, 3);
            $allArray['total'] = array_sum($slicedArray);

            DB::beginTransaction();
            $specialEducation->update($allArray);
            DB::commit();

            Session::flash('success', "विवरण सफलतापूर्वक परिवर्तन गरियो");
            return redirect()->route('special-education.index');

        } catch (\Exception $error) {
            DB::rollBack();
            Session::flash('error', $error->getMessage());
            return redirect()->back();
        }
    }

    public function destroy($id) {
        $specialEducation = SpecialEducation::find($id);
        if ($specialEducation) {
            $specialEducation->delete();
            return response("वडा नं ".$specialEducation->ward_no. " को विवरण सफलतापूर्वक हटाइएको छ");
        } else {
            return response("डाटा हटाउन असमर्थ");
        }
    }
}
