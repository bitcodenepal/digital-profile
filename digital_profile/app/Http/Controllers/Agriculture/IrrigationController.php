<?php

namespace App\Http\Controllers\Agriculture;

use App\Agriculture\Irrigation;
use App\Http\Controllers\Controller;
use App\Http\Requests\Agriculture\IrrigationRequest;
use App\Services\NumberConverter;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

/**
 * class IrrigationController
 * 
 * @package: App\Http\Controllers\Agriculture
 * @author: Shashank Jha <shashankj677@gmail.com>
 */

class IrrigationController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view('agriculture.irrigation.index')
            ->with('irrigations', Irrigation::all())
            ->with('numberConverter', new NumberConverter);
    }

    public function create() {
        return view('agriculture.irrigation.create');
    }

    public function store(IrrigationRequest $request) {
        try {
            DB::beginTransaction();
            Irrigation::create($request->validated());
            DB::commit();

            Session::flash('success', 'विवरण सफलतापूर्वक थपियो');
            return redirect()->route('irrigation.index');

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
        $irrigation = Irrigation::findOrFail($id);
        return view('agriculture.irrigation.edit')
            ->with('irrigation', $irrigation);
    }

    public function update(IrrigationRequest $request, $id) {
        try {
            $irrigation = Irrigation::findOrFail($id);

            DB::beginTransaction();
            $irrigation->update($request->validated());
            DB::commit();

            Session::flash('success', "विवरण सफलतापूर्वक परिवर्तन गरियो");
            return redirect()->route('irrigation.index');
        } catch (\Exception $error) {
            DB::rollBack();
            Session::flash('error', $error->getMessage());
            return redirect()->back();
        }
    }

    public function destroy($id) {
        $irrigation = Irrigation::find($id);
        if ($irrigation) {
            $irrigation->delete();
            return response($irrigation->name. " को विवरण सफलतापूर्वक हटाइएको छ");
        } else {
            return response("डाटा हटाउन असमर्थ");
        }
    }
}
