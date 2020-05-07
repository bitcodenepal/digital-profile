<?php

namespace App\Http\Controllers\Economy;

use App\Economy\Occupation;
use App\Http\Controllers\Controller;
use App\Http\Requests\Economy\OccupationRequest;
use App\Services\NumberConverter;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

/**
 * class OccupationController
 * 
 * @package: App\Http\Controllers\Economy
 * @author: Shashank Jha <shashankj677@gmail.com>
 */

class OccupationController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view('economy.occupation.index')
            ->with('occupations', Occupation::all())
            ->with('numberConverter', new NumberConverter);
    }

    public function create() {
        return view('economy.occupation.create');
    }

    public function store(OccupationRequest $request) {
        try {
            DB::beginTransaction();
            Occupation::create($request->validated());
            DB::commit();

            Session::flash('success', 'विवरण सफलतापूर्वक थपियो');
            return redirect()->route('occupation.index');
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
        $occupation = Occupation::findOrFail($id);
        return view('economy.occupation.edit')
            ->with('occupation', $occupation);
    }

    public function update(OccupationRequest $request, $id) {
        try {
            $occupation = Occupation::findOrFail($id);

            DB::beginTransaction();
            $occupation->update($request->validated());
            DB::commit();

            Session::flash('success', "विवरण सफलतापूर्वक परिवर्तन गरियो");
            return redirect()->route('occupation.index');
            
        } catch (\Exception $error) {
            DB::rollBack();
            Session::flash('error', $error->getMessage());
            return redirect()->back();
        }
    }

    public function destroy($id) {
        $occupation = Occupation::find($id);
        if ($occupation) {
            $occupation->delete();
            return response("वडा नं ".$occupation->ward_no. " को विवरण सफलतापूर्वक हटाइएको छ");
        } else {
            return response("डाटा हटाउन असमर्थ");
        }
    }
}
