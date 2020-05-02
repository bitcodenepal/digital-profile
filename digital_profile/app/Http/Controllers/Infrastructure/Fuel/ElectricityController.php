<?php

namespace App\Http\Controllers\Infrastructure\Fuel;

use App\Http\Controllers\Controller;
use App\Http\Requests\Infrastructure\Fuel\ElectricityRequest;
use App\Infrastructure\Fuel\Electricity;
use App\Services\NumberConverter;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

/**
 * Class ElectricityController
 * 
 * @package: namespace App\Http\Controllers\Infrastructure\Fuel
 * @author: Shashank jha <shashankj677@gmail.com>
 */

class ElectricityController extends Controller
{

    public function index() {
        return view('infrastructure.fuel.electricity.table')
            ->with('electricities', Electricity::all())
            ->with('numberConverter', new NumberConverter);
    }

    public function create() {
        return view('infrastructure.fuel.electricity.create');
    }

    public function store(ElectricityRequest $request) {
        try {
            $validatedArray = $request->validated();
            $slicedArray = array_slice($validatedArray, 1);
            $validatedArray['total'] = array_sum($slicedArray);
            
            DB::beginTransaction();
            Electricity::create($validatedArray);
            DB::commit();

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
        $electricity = Electricity::findOrFail($id);
        return view('infrastructure.fuel.electricity.edit')
            ->with('electricity', $electricity);
    }

    public function update(ElectricityRequest $request, $id) {
        try {
            $electricity = Electricity::findOrFail($id);
            $validatedArray = $request->validated();
            $slicedArray = array_slice($validatedArray, 1);
            $validatedArray['total'] = array_sum($slicedArray);
            
            DB::beginTransaction();
            $electricity->update($validatedArray);
            DB::commit();

            Session::flash('success', "विवरण सफलतापूर्वक परिवर्तन गरियो");
            return redirect()->route('infrastructure-fuel-gas.index');

        } catch (\Exception $error) {
            DB::rollBack();
            Session::flash('error', $error->getMessage());
            return redirect()->back();
        }
    }

    public function delete($id) {
        return view('infrastructure.fuel.electricity.delete')
            ->with('id', $id);
    }

    public function destroy($id) {
        $electricity = Electricity::find($id);
        if ($electricity) {
            $electricity->delete();
            Session::flash('success', "वडा नं- ".$electricity->ward_no." को विवरण सफलतापूर्वक हटाइएको छ");
            return redirect()->route('infrastructure-fuel-gas.index');
        } else {
            Session::flash('error', "डाटा हटाउन असमर्थ");
            return redirect()->route('infrastructure-fuel-gas.index');
        }
    }
}
