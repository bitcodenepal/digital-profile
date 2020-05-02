<?php

namespace App\Http\Controllers\Infrastructure\Fuel;

use App\Http\Controllers\Controller;
use App\Http\Requests\Infrastructure\Fuel\GasRequest;
use App\Infrastructure\Fuel\Gas;
use App\Services\NumberConverter;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

/**
 * Class GasController
 * 
 * @package: namespace App\Http\Controllers\Infrastructure\Fuel
 * @author: Shashank jha <shashankj677@gmail.com>
 */

class GasController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view('infrastructure.fuel.gas.table')
            ->with('gases', Gas::all())
            ->with('numberConverter', new NumberConverter);
    }

    public function create() {
        return view('infrastructure.fuel.gas.create');
    }

    public function store(GasRequest $request) {
        try {
            $validatedArray = $request->validated();
            $slicedArray = array_slice($validatedArray, 1);
            $validatedArray['total'] = array_sum($slicedArray);

            DB::beginTransaction();
            Gas::create($validatedArray);
            Db::commit();

            Session::flash('success', "विवरण सफलतापूर्वक थपियो");
            return redirect()->route('infrastructure-fuel-gas.index');

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
        $gas = Gas::findOrFail($id);
        return view('infrastructure.fuel.gas.edit')
            ->with('gas', $gas);
    }

    public function update(GasRequest $request, $id) {
        try {
            $gas = Gas::findOrFail($id);
            $validatedArray = $request->validated();
            $slicedArray = array_slice($validatedArray, 1);
            $validatedArray['total'] = array_sum($slicedArray);

            DB::beginTransaction();
            $gas->update($validatedArray);
            DB::commit();

            Session::flash('success', "विवरण सफलतापूर्वक परिवर्तन गरियो");
            return redirect()->route('infrastructure-fuel-gas.index');

        } catch (\Exception $error) {
            DB::rollBack();
            Session::flash('error', $error->getMessage());
            return redirect()->back();
        }
    }

    public function destroy($id) {
        $gas = Gas::find($id);
        if ($gas) {
            $gas->delete();
            return response("वडा नं- ".$gas->ward_no." को विवरण सफलतापूर्वक हटाइएको छ");
        } else {
            return response("डाटा हटाउन असमर्थ");
        }
    }
}
