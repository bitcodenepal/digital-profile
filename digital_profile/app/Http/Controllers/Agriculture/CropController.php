<?php

namespace App\Http\Controllers\Agriculture;

use App\Agriculture\Crop;
use App\Http\Controllers\Controller;
use App\Http\Requests\Agriculture\CropRequest;
use App\Services\NumberConverter;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

/**
 * class CropController
 * 
 * @package: App\Http\Controllers\Agriculture
 * @author: Shashank Jha <shashankj677@gmail.com>
 */

class CropController extends Controller
{
    public function __construct() {
        $this->middleware('auth');    
    }

    public function index() {
        return view('agriculture.crop.index')
            ->with('crops', Crop::all())
            ->with('numberConverter', new NumberConverter);
    }

    public function create() {
        return view('agriculture.crop.create');
    }

    public function store(CropRequest $request) {
        try {
            DB::beginTransaction();
            Crop::create($request->validated());
            DB::commit();

            Session::flash('success', 'विवरण सफलतापूर्वक थपियो');
            return redirect()->route('crop.index');
            
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
        $crop = Crop::findOrFail($id);
        return view('agriculture.crop.edit')
            ->with('crop', $crop);
    }

    public function update(CropRequest $request, $id) {
        try {
            $crop = Crop::findOrFail($id);

            DB::beginTransaction();
            $crop->update($request->validated());
            DB::commit();

            Session::flash('success', "विवरण सफलतापूर्वक परिवर्तन गरियो");
            return redirect()->route('crop.index');

        } catch (\Exception $error) {
            DB::rollBack();
            Session::flash('error', $error->getMessage());
            return redirect()->back();
        }
    }

    public function destroy($id) {
        $crop = Crop::find($id);
        if ($crop) {
            $crop->delete();
            return response("वडा नम्बर ".$crop->ward_no. " को विवरण सफलतापूर्वक हटाइएको छ");
        } else {
            return response("डाटा हटाउन असमर्थ");
        }
    }
}
