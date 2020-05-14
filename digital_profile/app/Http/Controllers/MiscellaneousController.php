<?php

namespace App\Http\Controllers;

use App\Http\Requests\MiscellaneousRequest;
use App\Miscellaneous;
use App\Services\NumberConverter;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

/**
 * class MiscellaneousController
 * @package: App\Http\Controllers
 * @author: Shashank Jha <shashankj677@gmail.com>
 */

class MiscellaneousController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view('miscellaneous.index')
            ->with('miscellaneous', Miscellaneous::all())
            ->with('numberConverter', new NumberConverter);
    }

    public function create() {
        return view('miscellaneous.create');
    }

    public function store(MiscellaneousRequest $request) {
        try {
            DB::beginTransaction();
            Miscellaneous::create($request->validated());
            DB::commit();

            Session::flash('success', 'विवरण सफलतापूर्वक थपियो');
            return redirect()->route('miscellaneous.index');

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
        $miscellaneous = Miscellaneous::findOrFail($id);
        return view('miscellaneous.edit')
            ->with('miscellaneous', $miscellaneous);
    }

    public function update(MiscellaneousRequest $request, $id) {
        try {
            $miscellaneous = Miscellaneous::findOrFail($id);

            DB::beginTransaction();
            $miscellaneous->update($request->validated());
            DB::commit();

            Session::flash('success', "विवरण सफलतापूर्वक परिवर्तन गरियो");
            return redirect()->route('miscellaneous.index');

        } catch (\Exception $error) {
            DB::rollBack();
            Session::flash('error', $error->getMessage());
            return redirect()->back();
        }
    }

    public function destroy($id) {
        $miscellaneous = Miscellaneous::find($id);
        if ($miscellaneous) {
            $miscellaneous->delete();
            return response($miscellaneous->name. " को विवरण सफलतापूर्वक हटाइएको छ");
        } else {
            return response("डाटा हटाउन असमर्थ");
        }
    }
}
