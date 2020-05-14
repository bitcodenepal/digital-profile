<?php

namespace App\Http\Controllers\Hygiene;

use App\Http\Controllers\Controller;
use App\Http\Requests\Hygiene\WaterRequest;
use App\Hygiene\Water;
use App\Services\NumberConverter;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

/**
 * class WaterController
 * 
 * @package: App\Http\Controllers\Hygiene
 * @author: Shashank Jha <shashankj677@gmail.com>
 */

class WaterController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view('hygiene.water.index')
            ->with('waters', Water::all())
            ->with('numberConverter', new NumberConverter);
    }

    public function create() {
        return view('hygiene.water.create');
    }

    public function store(WaterRequest $request) {
        try {
            $validatedArray = $request->validated();
            $slicedArray = array_slice($validatedArray, 1);
            $validatedArray['total'] = array_sum($slicedArray);

            DB::beginTransaction();
            Water::create($validatedArray);
            DB::commit();

            Session::flash('success', 'विवरण सफलतापूर्वक थपियो');
            return redirect()->route('water.index');

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
        $water = Water::findOrFail($id);
        return view('hygiene.water.edit')
            ->with('water', $water);
    }

    public function update(WaterRequest $request, $id) {
        try {
            $water = Water::findOrFail($id);

            $validatedArray = $request->validated();
            $slicedArray = array_slice($validatedArray, 2);
            $validatedArray['total'] = array_sum($slicedArray);

            DB::beginTransaction();
            $water->update($validatedArray);
            DB::commit();

            Session::flash('success', "विवरण सफलतापूर्वक परिवर्तन गरियो");
            return redirect()->route('water.index');

        } catch (\Exception $error) {
            DB::rollBack();
            Session::flash('error', $error->getMessage());
            return redirect()->back();
        }
    }

    public function destroy($id) {
        $water = Water::find($id);
        if ($water) {
            $water->delete();
            return response("वडा नम्बर " .$water->ward_no. " को विवरण सफलतापूर्वक हटाइएको छ");
        } else {
            return response("डाटा हटाउन असमर्थ");
        }
    }
}
