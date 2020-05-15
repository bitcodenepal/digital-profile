<?php

namespace App\Http\Controllers\Disaster;

use App\Disaster\House;
use App\Http\Controllers\Controller;
use App\Http\Requests\Disaster\HouseRequest;
use App\Services\NumberConverter;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

/**
 * class HouseController
 * 
 * @package: App\Http\Controllers\Disaster
 * @author: Shashank Jha <shashankj677@gmail.com>
 */

class HouseController extends Controller
{
    public function __construct() {
        $this->middleware('auth');    
    }

    public function index() {
        return view('disaster.house.index')
            ->with('houses', House::all())
            ->with('numberConverter', new NumberConverter);
    }

    public function create(){
        return view('disaster.house.create');
    }

    public function store(HouseRequest $request) {
        try {
            $validatedArray = $request->validated();
            $validatedArray['total_safety'] = $request->safe_built + $request->unsafe_built;
            $validatedArray['total_quakes'] = $request->built_for_quakes + $request->not_built_for_quakes;

            DB::beginTransaction();
            House::create($validatedArray);
            DB::commit();

            Session::flash('success', 'विवरण सफलतापूर्वक थपियो');
            return redirect()->route('house.index');
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
        $house = House::findOrFail($id);
        return view('disaster.house.edit')
            ->with('house', $house);
    }

    public function update(HouseRequest $request, $id) {
        try {
            $house = House::findOrFail($id);

            $validatedArray = $request->validated();
            $validatedArray['total_safety'] = $request->safe_built + $request->unsafe_built;
            $validatedArray['total_quakes'] = $request->built_for_quakes + $request->not_built_for_quakes;

            DB::beginTransaction();
            $house->update($validatedArray);
            DB::commit();

            Session::flash('success', "विवरण सफलतापूर्वक परिवर्तन गरियो");
            return redirect()->route('house.index');

        } catch (\Exception $error) {
            DB::rollBack();
            Session::flash('error', $error->getMessage());
            return redirect()->back();
        }
    }

    public function destroy($id) {
        $house = House::find($id);
        if ($house) {
            $house->delete();
            return response("वडा नम्बर ".$house->ward_no. " को विवरण सफलतापूर्वक हटाइएको छ");
        } else {
            return response("डाटा हटाउन असमर्थ");
        }
    }
}
