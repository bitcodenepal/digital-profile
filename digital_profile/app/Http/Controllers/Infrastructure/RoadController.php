<?php

namespace App\Http\Controllers\Infrastructure;

use App\Infrastructure\Road;
use App\Http\Controllers\Controller;
use App\Http\Requests\Infrastructure\RoadRequest;
use App\Services\NumberConverter;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

/**
 * class RoadController
 * 
 * @package: App\Http\Controllers\Infrastructure
 * @author: Shashank Jha <shashankj677@gmail.com>
 */

class RoadController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view('infrastructure.road.index')
            ->with('numberConverter', new NumberConverter)
            ->with('roads', Road::all());
    }

    public function create() {
        return view('infrastructure.road.create');
    }

    public function store(RoadRequest $request) {
        try {
            DB::beginTransaction();
            Road::create($request->validated());
            DB::commit();

            Session::flash('success', "विवरण सफलतापूर्वक थपियो");
            return redirect()->route('infrastructure-road.index');

        } catch (\Exception $error) {
            DB::rollBack();
            Session::flash('error', $error->getMessage());
            return redirect()->back();
        }
    }

    public function show(Road $road) {
        Session::flash('info', "माफ गर्नुहोस्! अनुरोध गरिएको यूआरआई फेला पार्न असमर्थ");
        return redirect()->back();
    }

    public function edit($id) {
        $road = Road::findOrFail($id);
        return view('infrastructure.road.edit')
            ->with('road', $road);
    }

    public function update(RoadRequest $request, $id) {
        $road = Road::findOrFail($id);
        try {
            DB::beginTransaction();
            $road->update($request->validated());
            DB::commit();

            Session::flash('success', "विवरण सफलतापूर्वक परिवर्तन गरियो");
            return redirect()->route('infrastructure-road.index');
        } catch (\Exception $error) {
            DB::rollBack();
            Session::flash('error', $error->getMessage());
            return redirect()->back();
        }
    }

    public function destroy($id) {
        $road = Road::find($id);
        if ($road) {
            $road->delete();
            return response($road->name."(वडा नं- ".$road->ward_no.") को विवरण सफलतापूर्वक हटाइएको छ");
        } else {
            return response("डाटा हटाउन असमर्थ");
        }
    }
}
