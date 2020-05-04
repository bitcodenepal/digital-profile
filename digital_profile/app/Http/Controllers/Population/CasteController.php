<?php

namespace App\Http\Controllers\Population;

use App\Http\Controllers\Controller;
use App\Http\Requests\Population\CasteRequest;
use App\Population\Caste;
use App\Services\NumberConverter;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CasteController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view('population.caste.index')
            ->with('castes', Caste::all())
            ->with('numberConverter', new NumberConverter);
    }

    public function create() {
        return view('population.caste.create');
    }

    public function store(CasteRequest $request) {
        try {
            $validatedArray = $request->validated();
            $slicedArray = array_slice($validatedArray, 1);
            $validatedArray['total'] = array_sum($slicedArray);

            DB::beginTransaction();
            Caste::create($validatedArray);
            DB::commit();

            Session::flash('success', "विवरण सफलतापूर्वक थपियो");
            return redirect()->route('caste.index');

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
        $caste = Caste::findOrFail($id);
        return view('population.caste.edit')
            ->with('caste', $caste);
    }

    public function update(CasteRequest $request, $id) {
        try {
            $caste = Caste::findOrFail($id);

            $validatedArray = $request->validated();
            $slicedArray = array_slice($validatedArray, 1);
            $validatedArray['total'] = array_sum($slicedArray);

            DB::beginTransaction();
            $caste->update($validatedArray);
            DB::commit();

            Session::flash('success', "विवरण सफलतापूर्वक परिवर्तन गरियो");
            return redirect()->route('caste.index');
            
        } catch (\Exception $error) {
            DB::rollBack();
            Session::flash('error', $error->getMessage());
            return redirect()->back();
        }
    }

    public function destroy($id) {
        $caste = Caste::find($id);
        if ($caste) {
            $caste->delete();
            return response("वडा नं ".$caste->ward_no. " को विवरण सफलतापूर्वक हटाइएको छ");
        } else {
            return response("डाटा हटाउन असमर्थ");
        }
    }
}
