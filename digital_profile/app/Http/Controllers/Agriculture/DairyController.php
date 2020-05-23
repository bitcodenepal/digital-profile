<?php

namespace App\Http\Controllers\Agriculture;

use App\Agriculture\Dairy;
use App\Http\Controllers\Controller;
use App\Http\Requests\Agriculture\DairyRequest;
use App\Services\NumberConverter;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

/**
 * class DairyController
 * 
 * @package: App\Http\Controllers\Agriculture,
 * @author: Shashank Jha <shashankj677@gmail.com>
 */

class DairyController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view('agriculture.dairy.index')
            ->with('dairies', Dairy::all())
            ->with('numberConverter', new NumberConverter);
    }

    public function create() {
        return view('agriculture.dairy.create');
    }

    public function store(DairyRequest $request) {
        try {
            $validatedArray = $request->validated();
            $validatedArray['total_cattle'] = $request->cow+$request->buffalo;
            $validatedArray['total_milk'] = $request->cow_milk+$request->buffalo_milk;

            DB::beginTransaction();
            Dairy::create($validatedArray);
            DB::commit();

            Session::flash('success', 'विवरण सफलतापूर्वक थपियो');
            return redirect()->route('dairy.index');
            
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
        $dairy = Dairy::findOrFail($id);
        return view('agriculture.dairy.edit')
            ->with('dairy', $dairy);
    }

    public function update(DairyRequest $request, $id) {
        try {
            $dairy = Dairy::findOrFail($id);

            $validatedArray = $request->validated();
            $validatedArray['total_cattle'] = $request->cow+$request->buffalo;
            $validatedArray['total_milk'] = $request->cow_milk+$request->buffalo_milk;

            DB::beginTransaction();
            $dairy->update($validatedArray);
            DB::commit();

            Session::flash('success', "विवरण सफलतापूर्वक परिवर्तन गरियो");
            return redirect()->route('dairy.index');

        } catch (\Exception $error) {
            DB::rollBack();
            Session::flash('error', $error->getMessage());
            return redirect()->back();
        }
    }

    public function destroy($id) {
        $dairy = Dairy::find($id);
        if ($dairy) {
            $dairy->delete();
            return response("वडा नम्बर ".$dairy->ward_no. " को विवरण सफलतापूर्वक हटाइएको छ");
        } else {
            return response("डाटा हटाउन असमर्थ");
        }
    }
}
