<?php

namespace App\Http\Controllers\Education;

use App\Education\Literacy;
use App\Http\Controllers\Controller;
use App\Http\Requests\Education\LiteracyRequest;
use App\Services\NumberConverter;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

/**
 * class LiteracyController
 * 
 * @package: App\Http\Controllers\Education
 * @author: Shashank Jha <shashankj677@gmail.com>
 */

class LiteracyController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view('education.literacy.index')
            ->with('literacies', Literacy::all())
            ->with('numberConverter', new NumberConverter);
    }

    public function create() {
        return view('education.literacy.create');
    }

    public function store(LiteracyRequest $request) {
        try {
            $validatedArray = $request->validated();
            $validatedArray['total_literate'] = round(($request->literate_male+$request->literate_female)/2, 2);
            $validatedArray['total_illiterate'] = round(($request->illiterate_male+$request->illiterate_female)/2, 2);
            $validatedArray['total_minor'] = round(($request->minor_male+$request->minor_female)/2, 2);

            DB::beginTransaction();
            Literacy::create($validatedArray);
            DB::commit();

            Session::flash('success', 'विवरण सफलतापूर्वक थपियो');
            return redirect()->route('literacy.index');
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
        $literacy = Literacy::findOrFail($id);
        return view('education.literacy.edit')
            ->with('literacy', $literacy);
    }

    public function update(LiteracyRequest $request, $id) {
        try {
            $literacy = Literacy::findOrFail($id);
            $validatedArray = $request->validated();
            $validatedArray['total_literate'] = round(($request->literate_male+$request->literate_female)/2, 2);
            $validatedArray['total_illiterate'] = round(($request->illiterate_male+$request->illiterate_female)/2, 2);
            $validatedArray['total_minor'] = round(($request->minor_male+$request->minor_female)/2, 2);

            DB::beginTransaction();
            $literacy->update($validatedArray);
            DB::commit();

            Session::flash('success', "विवरण सफलतापूर्वक परिवर्तन गरियो");
            return redirect()->route('literacy.index');

        } catch (\Exception $error) {
            DB::rollBack();
            Session::flash('error', $error->getMessage());
            return redirect()->back();
        }
    }

    public function destroy($id) {
        $literacy = Literacy::find($id);
        if ($literacy) {
            $literacy->delete();
            return response("वडा नम्बर " .$literacy->ward_no. " को विवरण सफलतापूर्वक हटाइएको छ");
        } else {
            return response("डाटा हटाउन असमर्थ");
        }
    }
}
