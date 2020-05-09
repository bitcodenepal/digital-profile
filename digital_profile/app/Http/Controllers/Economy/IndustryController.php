<?php

namespace App\Http\Controllers\Economy;

use App\Economy\Industry;
use App\Http\Controllers\Controller;
use App\Http\Requests\Economy\IndustryRequest;
use App\Services\NumberConverter;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class IndustryController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view('economy.industry.index')
            ->with('industries', Industry::all())
            ->with('numberConverter', new NumberConverter);
    }

    public function create() {
        return view('economy.industry.create');
    }

    public function store(IndustryRequest $request) {
        try {
            DB::beginTransaction();
            Industry::create($request->validated());
            DB::commit();

            Session::flash('success', 'विवरण सफलतापूर्वक थपियो');
            return redirect()->route('industry.index');
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
        $industry = Industry::findOrFail($id);
        return view('economy.industry.edit')
            ->with('industry', $industry);
    }

    public function update(IndustryRequest $request, $id) {
        try {
            $industry = Industry::findOrFail($id);

            DB::beginTransaction();
            $industry->update($request->validated());
            DB::commit();

            Session::flash('success', "विवरण सफलतापूर्वक परिवर्तन गरियो");
            return redirect()->route('industry.index');
        } catch (\Exception $error) {
            DB::rollBack();
            Session::flash('error', $error->getMessage());
            return redirect()->back();
        }
    }

    public function destroy($id) {
        $industry = Industry::find($id);
        if ($industry) {
            $industry->delete();
            return response($industry->name. " को विवरण सफलतापूर्वक हटाइएको छ");
        } else {
            return response("डाटा हटाउन असमर्थ");
        }
    }
}
