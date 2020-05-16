<?php

namespace App\Http\Controllers\Accommodation;

use App\Accommodation\Foundation;
use App\Http\Controllers\Controller;
use App\Http\Requests\Accommodation\FoundationRequest;
use App\Services\NumberConverter;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

/**
 * class FoundationController
 * 
 * @package: App\Http\Controllers\Accommodation
 * @author: Shashank Jha
 */

class FoundationController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view('accommodation.foundation.index')
            ->with('foundations', Foundation::all())
            ->with('numberConverter', new NumberConverter);
    }

    public function create() {
        return view('accommodation.foundation.create');
    }

    public function store(FoundationRequest $request) {
        try {
            $validatedArray = $request->validated();
            $slicedArray = array_slice($validatedArray, 1);
            $validatedArray['total'] = array_sum($slicedArray);

            DB::beginTransaction();
            Foundation::create($validatedArray);
            DB::commit();

            Session::flash('success', 'विवरण सफलतापूर्वक थपियो');
            return redirect()->route('foundation.index');

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
        $foundation = Foundation::findOrFail($id);
        return view('accommodation.foundation.edit')
            ->with('foundation', $foundation);
    }

    public function update(FoundationRequest $request, $id) {
        try {
            $foundation = Foundation::findOrFail($id);

            $validatedArray = $request->validated();
            $slicedArray = array_slice($validatedArray, 1);
            $validatedArray['total'] = array_sum($slicedArray);

            DB::beginTransaction();
            $foundation->update($validatedArray);
            DB::commit();

            Session::flash('success', "विवरण सफलतापूर्वक परिवर्तन गरियो");
            return redirect()->route('foundation.index');

        } catch (\Exception $error) {
            DB::rollBack();
            Session::flash('error', $error->getMessage());
            return redirect()->back();
        }
    }

    public function destroy($id) {
        $foundation = Foundation::find($id);
        if ($foundation) {
            $foundation->delete();
            return response("वडा नम्बर ".$foundation->ward_no. " को विवरण सफलतापूर्वक हटाइएको छ");
        } else {
            return response("डाटा हटाउन असमर्थ");
        }
    }
}
