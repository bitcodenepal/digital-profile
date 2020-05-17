<?php

namespace App\Http\Controllers\Economy;

use App\Economy\Trade;
use App\Http\Controllers\Controller;
use App\Http\Requests\Economy\TradeRequest;
use App\Services\NumberConverter;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

/**
 * class TradeController
 * 
 * @package: App\Http\Controllers\Economy
 * @author: Shashank Jha <shashankj677@gmail.com>
 */

class TradeController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view('economy.trade.index')
            ->with('trades', Trade::all())
            ->with('numberConverter', new NumberConverter);
    }

    public function create() {
        return view('economy.trade.create');
    }

    public function store(TradeRequest $request) {
        try {
            DB::beginTransaction();
            Trade::create($request->validated());
            DB::commit();

            Session::flash('success', 'विवरण सफलतापूर्वक थपियो');
            return redirect()->route('trade.index');
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
        $trade = Trade::findOrFail($id);
        return view('economy.trade.edit')
            ->with('trade', $trade);
    }

    public function update(TradeRequest $request, $id) {
        try {
            $trade = Trade::findOrFail($id);

            DB::beginTransaction();
            $trade->update($request->validated());
            DB::commit();

            Session::flash('success', "विवरण सफलतापूर्वक परिवर्तन गरियो");
            return redirect()->route('trade.index');
        } catch (\Exception $error) {
            DB::rollBack();
            Session::flash('error', $error->getMessage());
            return redirect()->back();
        }
    }

    public function destroy($id) {
        $trade = Trade::find($id);
        if ($trade) {
            $trade->delete();
            return response($trade->name. " को विवरण सफलतापूर्वक हटाइएको छ");
        } else {
            return response("डाटा हटाउन असमर्थ");
        }
    }
}
