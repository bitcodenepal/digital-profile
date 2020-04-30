<?php

namespace App\Http\Controllers\Infrastructure;

use App\Infrastructure\Bridge;
use App\Http\Controllers\Controller;
use App\Http\Requests\Infrastructure\BridgeRequest;
use App\Services\NumberConverter;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

/**
 * class BridgeController
 * 
 * @package: App\Http\Controllers\Infrastructure
 * @author: Shashank Jha <shashankj677@gmail.com>
 */

class BridgeController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view('infrastructure.bridge.index')
            ->with('numberConverter', new NumberConverter)
            ->with('bridges', Bridge::all());
    }

    public function create() {
        return view('infrastructure.bridge.create');
    }

    public function store(BridgeRequest $request) {
        try {
            DB::beginTransaction();
            Bridge::create($request->validated());
            DB::commit();

            Session::flash('success', "विवरण सफलतापूर्वक थपियो");
            return redirect()->route('infrastructure-bridge.index');
        } catch (\Exception $error) {
            DB::rollBack();
            Session::flash('error', $error->getMessage());
            return redirect()->back();
        }
    }

    public function show(Bridge $bridge) {
        Session::flash('info', "माफ गर्नुहोस्! अनुरोध गरिएको यूआरआई फेला पार्न असमर्थ");
        return redirect()->back();
    }

    public function edit($id) {
        $bridge = Bridge::findOrFail($id);
        return view('infrastructure.bridge.edit')
            ->with('bridge', $bridge);
    }

    public function update(BridgeRequest $request, $id) {
        $bridge = Bridge::findOrFail($id);
        try {
            DB::beginTransaction();
            $bridge->update($request->validated());
            DB::commit();

            Session::flash('success', "विवरण सफलतापूर्वक परिवर्तन गरियो");
            return redirect()->route('infrastructure-bridge.index');
        } catch (\Exception $error) {
            DB::rollBack();
            Session::flash('error', $error->getMessage());
            return redirect()->back();
        }
    }

    public function destroy($id) {
        $bridge = Bridge::find($id);
        if ($bridge) {
            $bridge->delete();
            return response($bridge->name."(वडा नं- ".$bridge->ward_no.") को विवरण सफलतापूर्वक हटाइएको छ");
        } else {
            return response("डाटा हटाउन असमर्थ");
        }
    }
}
