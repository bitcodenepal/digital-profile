<?php

namespace App\Http\Controllers\Economy;

use App\Economy\Income;
use App\Http\Controllers\Controller;
use App\Http\Requests\Economy\IncomeRequest;
use App\Services\NumberConverter;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

/**
 * class IncomeController
 * 
 * @package: App\Http\Controllers\Economy
 * @author: Shashank Jha <shashankj677@gmail.com>
 */

class IncomeController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view('economy.income.index')
            ->with('incomes', Income::all())
            ->with('numberConverter', new NumberConverter);
    }

    public function create() {
        return view('economy.income.create');
    }

    public function store(IncomeRequest $request) {
        try {
            DB::beginTransaction();
            Income::create($request->validated());
            DB::commit();

            Session::flash('success', 'विवरण सफलतापूर्वक थपियो');
            return redirect()->route('income.index');
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
        $income = Income::findOrFail($id);
        return view('economy.income.edit')
            ->with('income', $income);
    }

    public function update(IncomeRequest $request, $id) {
        try {
            $income = Income::findOrFail($id);

            DB::beginTransaction();
            $income->update($request->validated());
            DB::commit();

            Session::flash('success', "विवरण सफलतापूर्वक परिवर्तन गरियो");
            return redirect()->route('income.index');
        } catch (\Exception $error) {
            DB::rollBack();
            Session::flash('error', $error->getMessage());
            return redirect()->back();
        }
    }

    public function destroy($id) {
        $income = Income::find($id);
        if ($income) {
            $income->delete();
            return response("वडा नम्बर ".$income->ward_no. " को विवरण सफलतापूर्वक हटाइएको छ");
        } else {
            return response("डाटा हटाउन असमर्थ");
        }
    }
}