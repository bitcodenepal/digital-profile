<?php

namespace App\Http\Controllers\Health;

use App\Health\Hospital;
use App\Http\Controllers\Controller;
use App\Http\Requests\Health\HospitalRequest;
use App\Services\NumberConverter;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

/**
 * class HospitalController
 * 
 * @package: App\Http\Controllers\Health
 * @author: Shashank Jha <shashankj677@gmail.com>
 */

class HospitalController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view('health.hospital.index')
            ->with('hospitals', Hospital::all())
            ->with('numberConverter', new NumberConverter);
    }

    public function create() {
        return view('health.hospital.create');
    }

    public function store(HospitalRequest $request) {
        try {
            DB::beginTransaction();
            Hospital::create($request->validated());
            DB::commit();

            Session::flash('success', 'विवरण सफलतापूर्वक थपियो');
            return redirect()->route('hospital.index');
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
        $hospital = Hospital::findOrFail($id);
        return view('health.hospital.edit')
            ->with('hospital', $hospital);
    }

    public function update(HospitalRequest $request, $id) {
        try {
            $hospital = Hospital::findOrFail($id);

            DB::beginTransaction();
            $hospital->update($request->validated());
            DB::commit();

            Session::flash('success', "विवरण सफलतापूर्वक परिवर्तन गरियो");
            return redirect()->route('literacy.index');

        } catch (\Exception $error) {
            DB::rollBack();
            Session::flash('error', $error->getMessage());
            return redirect()->back();
        }
    }

    public function destroy($id) {
        $hospital = Hospital::find($id);
        if ($hospital) {
            $hospital->delete();
            return response($hospital->name. " को विवरण सफलतापूर्वक हटाइएको छ");
        } else {
            return response("डाटा हटाउन असमर्थ");
        }
    }
}
