<?php

namespace App\Http\Controllers\Economy;

use App\Economy\Vocational;
use App\Http\Controllers\Controller;
use App\Http\Requests\Economy\VocationalRequest;
use App\Services\NumberConverter;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

/**
 * class VocationalController
 * 
 * @package: App\Http\Controllers\Economy
 * @author: Shashank Jha <shashankj677@gmail.com>
 */

class VocationalController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view('economy.vocational.index')
            ->with('vocationals', Vocational::all())
            ->with('numberConverter', new NumberConverter);
    }

    public function create() {
        return view('economy.vocational.create');
    }

    public function store(VocationalRequest $request) {
        try {
            DB::beginTransaction();
            Vocational::create($request->validated());
            DB::commit();

            Session::flash('success', 'विवरण सफलतापूर्वक थपियो');
            return redirect()->route('vocational.index');
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
        $vocational = Vocational::findOrFail($id);
        return view('economy.vocational.edit')
            ->with('vocational', $vocational);
    }

    public function update(VocationalRequest $request, $id) {
        try {
            $vocational = Vocational::findOrFail($id);

            DB::beginTransaction();
            $vocational->update($request->validated());
            DB::commit();

            Session::flash('success', "विवरण सफलतापूर्वक परिवर्तन गरियो");
            return redirect()->route('vocational.index');
        } catch (\Exception $error) {
            DB::rollBack();
            Session::flash('error', $error->getMessage());
            return redirect()->back();
        }
    }

    public function destroy($id) {
        $vocational = Vocational::find($id);
        if ($vocational) {
            $vocational->delete();
            return response("वडा नम्बर ".$vocational->ward_no. " को विवरण सफलतापूर्वक हटाइएको छ");
        } else {
            return response("डाटा हटाउन असमर्थ");
        }
    }
}