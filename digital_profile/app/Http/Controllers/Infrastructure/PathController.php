<?php

namespace App\Http\Controllers\Infrastructure;

use App\Http\Controllers\Controller;
use App\Http\Requests\Infrastructure\PathRequest;
use App\Infrastructure\Path;
use App\Services\NumberConverter;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

/**
 * class PathController
 * 
 * @package: App\Http\Controllers\Infrastructure
 * @author: Shashank Jha <shashankj677@gmail.com>
 */

class PathController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view('infrastructure.path.index')
            ->with('paths', Path::all())
            ->with('numberConverter', new NumberConverter);
    }

    public function create() {
        return view('infrastructure.path.create');
    }

    public function store(PathRequest $request) {
        try {
            DB::beginTransaction();
            Path::create($request->validated());
            DB::commit();

            Session::flash('success', "विवरण सफलतापूर्वक थपियो");
            return redirect()->route('infrastructure-path.index');

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
        $path = Path::findOrFail($id);
        return view('infrastructure.path.edit')
            ->with('path', $path);
    }

    public function update(PathRequest $request, $id) {
        $path = Path::findOrFail($id);
        try {
            DB::beginTransaction();
            $path->update($request->validated());
            DB::commit();

            Session::flash('success', "विवरण सफलतापूर्वक परिवर्तन गरियो");
            return redirect()->route('infrastructure-path.index');

        } catch (\Exception $error) {
            DB::rollBack();
            Session::flash('error', $error->getMessage());
            return redirect()->back();
        }
    }

    public function destroy($id) {
        $path = Path::find($id);
        if ($path) {
            $path->delete();
            return response($path->name."(वडा नं- ".$path->ward_no.") को विवरण सफलतापूर्वक हटाइएको छ");
        } else {
            return response("डाटा हटाउन असमर्थ");
        }
    }

}
