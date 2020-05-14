<?php

namespace App\Http\Controllers;

use App\Forest;
use App\Http\Requests\ForestRequest;
use App\Services\NumberConverter;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

/**
 * class ForestController
 * 
 * @package: App\Http\Controllers
 * @author: Shashank Jha <shashankj677@gmail.com>
 */

class ForestController extends Controller
{
    public function __construct() {
        $this->middleware('auth');    
    }

    public function index() {
        return view('forest.index')
            ->with('forests', Forest::all())
            ->with('numberConverter', new NumberConverter);
    }

    public function create() {
        return view('forest.create');
    }

    public function store(ForestRequest $request) {
        try {
            DB::beginTransaction();
            Forest::create($request->validated());
            DB::commit();

            Session::flash('success', 'विवरण सफलतापूर्वक थपियो');
            return redirect()->route('forest.index');

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
        $forest = Forest::findOrFail($id);
        return view('forest.edit')
            ->with('forest', $forest);
    }

    public function update(ForestRequest $request, $id) {
        try {
            $forest = Forest::findOrFail($id);

            DB::beginTransaction();
            $forest->update($request->validated());
            DB::commit();

            Session::flash('success', "विवरण सफलतापूर्वक परिवर्तन गरियो");
            return redirect()->route('forest.index');

        } catch (\Exception $error) {
            DB::rollBack();
            Session::flash('error', $error->getMessage());
            return redirect()->back();
        }
    }

    public function destroy($id) {
        $forest = Forest::find($id);
        if ($forest) {
            $forest->delete();
            return response($forest->name. " को विवरण सफलतापूर्वक हटाइएको छ");
        } else {
            return response("डाटा हटाउन असमर्थ");
        }
    }
}
