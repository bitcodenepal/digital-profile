<?php

namespace App\Http\Controllers\Tourism;

use App\Http\Controllers\Controller;
use App\Http\Requests\Tourism\PlaceRequest;
use App\Services\NumberConverter;
use App\Tourism\Place;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

/**
 * class PlaceController
 * 
 * @package: App\Http\Controllers\Tourism
 * @author: Shashank Jha <shashankj677@gmail.com>
 */

class PlaceController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view('tourism.place.index')
            ->with('places', Place::all())
            ->with('numberConverter', new NumberConverter);
    }

    public function create() {
        return view('tourism.place.create');
    }

    public function store(PlaceRequest $request) {
        try {
            DB::beginTransaction();
            Place::create($request->validated());
            DB::commit();

            Session::flash('success', 'विवरण सफलतापूर्वक थपियो');
            return redirect()->route('place.index');

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
        $place = Place::findOrFail($id);
        return view('tourism.place.edit')
            ->with('place', $place);
    }

    public function update(PlaceRequest $request, $id) {
        try {
            $place = Place::findOrFail($id);

            DB::beginTransaction();
            $place->update($request->validated());
            DB::commit();

            Session::flash('success', "विवरण सफलतापूर्वक परिवर्तन गरियो");
            return redirect()->route('place.index');

        } catch (\Exception $error) {
            DB::rollBack();
            Session::flash('error', $error->getMessage());
            return redirect()->back();
        }
    }

    public function destroy($id) {
        $place = Place::find($id);
        if ($place) {
            $place->delete();
            return response($place->name. " को विवरण सफलतापूर्वक हटाइएको छ");
        } else {
            return response("डाटा हटाउन असमर्थ");
        }
    }
}
