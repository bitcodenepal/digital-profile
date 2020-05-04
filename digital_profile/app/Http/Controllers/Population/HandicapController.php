<?php

namespace App\Http\Controllers\Population;

use App\Http\Controllers\Controller;
use App\Http\Requests\Population\HandicapRequest;
use App\Population\Handicap;
use App\Services\NumberConverter;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class HandicapController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view('population.handicap.index')
            ->with('handicaps', Handicap::all())
            ->with('numberConverter', new NumberConverter);
    }

    public function create() {
        return view('population.handicap.create');
    }

    public function store(HandicapRequest $request) {
        try {
            $validatedArray = $request->validated();
            $slicedArray = array_slice($validatedArray, 1);
            $validatedArray['total'] = array_sum($slicedArray);

            DB::beginTransaction();
            Handicap::create($validatedArray);
            DB::commit();

            Session::flash('success', "विवरण सफलतापूर्वक थपियो");
            return redirect()->route('handicap.index');

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
        $handicap = Handicap::findOrFail($id);
        return view('population.handicap.edit')
            ->with('handicap', $handicap);
    }

    public function update(HandicapRequest $request, $id) {
        try {
            $handicap = Handicap::findOrFail($id);

            $validatedArray = $request->validated();
            $slicedArray = array_slice($validatedArray, 1);
            $validatedArray['total'] = array_sum($slicedArray);

            DB::beginTransaction();
            $handicap->update($validatedArray);
            DB::commit();

            Session::flash('success', "विवरण सफलतापूर्वक परिवर्तन गरियो");
            return redirect()->route('handicap.index');
            
        } catch (\Exception $error) {
            DB::rollBack();
            Session::flash('error', $error->getMessage());
            return redirect()->back();
        }
    }

    public function destroy($id) {
        $handicap = Handicap::find($id);
        if ($handicap) {
            $handicap->delete();
            return response("वडा नं ".$handicap->ward_no. " को विवरण सफलतापूर्वक हटाइएको छ");
        } else {
            return response("डाटा हटाउन असमर्थ");
        }
    }
}
