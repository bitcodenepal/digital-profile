<?php

namespace App\Http\Controllers\Agriculture;

use App\Agriculture\Fruit;
use App\Http\Controllers\Controller;
use App\Http\Requests\Agriculture\FruitRequest;
use App\Services\NumberConverter;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

/**
 * class FruitController
 * 
 * @package: App\Http\Controllers\Agriculture
 * @author: Shashank Jha <shashankj677@gmail.com>
 */

class FruitController extends Controller
{
    public function __construct() {
        $this->middleware('auth');    
    }

    public function index() {
        return view('agriculture.fruit.index')
            ->with('fruits', Fruit::all())
            ->with('numberConverter', new NumberConverter);
    }

    public function create() {
        return view('agriculture.fruit.create');
    }

    public function store(FruitRequest $request) {
        try {
            DB::beginTransaction();
            Fruit::create($request->validated());
            DB::commit();

            Session::flash('success', 'विवरण सफलतापूर्वक थपियो');
            return redirect()->route('fruit.index');
            
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
        $fruit = Fruit::findOrFail($id);
        return view('agriculture.fruit.edit')
            ->with('fruit', $fruit);
    }

    public function update(FruitRequest $request, $id) {
        try {
            $fruit = Fruit::findOrFail($id);

            DB::beginTransaction();
            $fruit->update($request->validated());
            DB::commit();

            Session::flash('success', "विवरण सफलतापूर्वक परिवर्तन गरियो");
            return redirect()->route('fruit.index');

        } catch (\Exception $error) {
            DB::rollBack();
            Session::flash('error', $error->getMessage());
            return redirect()->back();
        }
    }

    public function destroy($id) {
        $fruit = Fruit::find($id);
        if ($fruit) {
            $fruit->delete();
            return response("वडा नम्बर ".$fruit->ward_no. " को विवरण सफलतापूर्वक हटाइएको छ");
        } else {
            return response("डाटा हटाउन असमर्थ");
        }
    }
}
