<?php

namespace App\Http\Controllers\Agriculture;

use App\Agriculture\Alternative;
use App\Http\Controllers\Controller;
use App\Http\Requests\Agriculture\AlternativeRequest;
use App\Services\NumberConverter;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

/**
 * class AlternativeController
 * 
 * @package: App\Http\Controllers\Agriculture
 * @author: Shashank Jha <shashankj677@gmail.com>
 */

class AlternativeController extends Controller
{
    public function __construct() {
        $this->middleware('auth');    
    }

    public function index() {
        return view('agriculture.alternative.index')
            ->with('alternatives', Alternative::all())
            ->with('numberConverter', new NumberConverter);
    }

    public function create() {
        return view('agriculture.alternative.create');
    }

    public function store(AlternativeRequest $request) {
        try {
            DB::beginTransaction();
            Alternative::create($request->validated());
            DB::commit();

            Session::flash('success', 'विवरण सफलतापूर्वक थपियो');
            return redirect()->route('alternative.index');
            
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
        $alternative = Alternative::findOrFail($id);
        return view('agriculture.alternative.edit')
            ->with('alternative', $alternative);
    }

    public function update(AlternativeRequest $request, $id) {
        try {
            $alternative = Alternative::findOrFail($id);

            DB::beginTransaction();
            $alternative->update($request->validated());
            DB::commit();

            Session::flash('success', "विवरण सफलतापूर्वक परिवर्तन गरियो");
            return redirect()->route('alternative.index');

        } catch (\Exception $error) {
            DB::rollBack();
            Session::flash('error', $error->getMessage());
            return redirect()->back();
        }
    }

    public function destroy($id) {
        $alternative = Alternative::find($id);
        if ($alternative) {
            $alternative->delete();
            return response("वडा नम्बर ".$alternative->ward_no. " को विवरण सफलतापूर्वक हटाइएको छ");
        } else {
            return response("डाटा हटाउन असमर्थ");
        }
    }
}