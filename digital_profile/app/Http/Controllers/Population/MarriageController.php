<?php

namespace App\Http\Controllers\Population;

use App\Http\Controllers\Controller;
use App\Http\Requests\Population\MarriageRequest;
use App\Population\Marriage;
use App\Services\NumberConverter;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

/**
 * class MarriageController
 * 
 * @package: App\Http\Controllers\Population
 * @author: Shashank Jha <shashankj677@gmail.com>
 */

class MarriageController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view('population.marriage.index')
            ->with('marriages', Marriage::all())
            ->with('numberConverter', new NumberConverter);
    }

    public function create() {
        return view('population.marriage.create');
    }

    public function store(MarriageRequest $request) {
        try {
            $validatedArray = $request->validated();
            $slicedArray = array_slice($validatedArray, 1);
            $validatedArray['total'] = array_sum($slicedArray);

            DB::beginTransaction();
            Marriage::create($validatedArray);
            DB::commit();

            Session::flash('success', 'विवरण सफलतापूर्वक थपियो');
            return redirect()->route('marriage.index');

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
        $marriage = Marriage::findOrFail($id);
        return view('population.marriage.edit')
            ->with('marriage', $marriage);
    }

    public function update(MarriageRequest $request, $id) {
        try {
            $marriage = Marriage::findOrFail($id);

            $validatedArray = $request->validated();
            $slicedArray = array_slice($validatedArray, 1);
            $validatedArray['total'] = array_sum($slicedArray);

            DB::beginTransaction();
            $marriage->update($validatedArray);
            DB::commit();

            Session::flash('success', "विवरण सफलतापूर्वक परिवर्तन गरियो");
            return redirect()->route('marriage.index');

        } catch (\Exception $error) {
            DB::rollBack();
            Session::flash('error', $error->getMessage());
            return redirect()->back();
        }
    }

    public function destroy($id) {
        $marriage = Marriage::find($id);
        if ($marriage) {
            $marriage->delete();
            return response("वडा नं ".$marriage->ward_no. " को विवरण सफलतापूर्वक हटाइएको छ");
        } else {
            return response("डाटा हटाउन असमर्थ");
        }
        
    }
}
