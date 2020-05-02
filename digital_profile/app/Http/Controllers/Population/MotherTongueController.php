<?php

namespace App\Http\Controllers\Population;

use App\Population\MotherTongue;
use App\Http\Controllers\Controller;
use App\Http\Requests\Population\MotherTongueRequest;
use App\Services\NumberConverter;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

/**
 * class MotherTongueController
 * @package: App\Http\Controllers
 * @author: Shashank Jha <shashankj677@gmail.com>
 */

class MotherTongueController extends Controller
{
    public function index() {
        return view('population.mother_tongue.index')
            ->with('numberConverter', new NumberConverter)
            ->with('motherTongues', MotherTongue::all());
    }

    public function create() {
        return view('population.mother_tongue.create');
    }

    public function store(MotherTongueRequest $request, NumberConverter $numberConverter) {
        try {
            $slicedArray = array_slice($request->all(), 2);
            $total = array_sum($slicedArray);

            DB::beginTransaction();

            $motherTongue = new MotherTongue;
            $motherTongue->ward_no = $numberConverter->devanagari($request->ward_no);
            $motherTongue->nepali = $numberConverter->devanagari($request->nepali);
            $motherTongue->maithili = $numberConverter->devanagari($request->maithili);
            $motherTongue->bhojpuri = $numberConverter->devanagari($request->bhojpuri);
            $motherTongue->tharu = $numberConverter->devanagari($request->tharu);
            $motherTongue->hindi = $numberConverter->devanagari($request->hindi);
            $motherTongue->urdu = $numberConverter->devanagari($request->urdu);
            $motherTongue->bantawa = $numberConverter->devanagari($request->bantawa);
            $motherTongue->tamang = $numberConverter->devanagari($request->tamang);
            $motherTongue->jhagad = $numberConverter->devanagari($request->jhagad);
            $motherTongue->others = $numberConverter->devanagari($request->others);
            $motherTongue->not_included = $numberConverter->devanagari($request->not_included);
            $motherTongue->total = $numberConverter->devanagari($total);
            $motherTongue->save();

            DB::commit();

            Session::flash('success', "विवरण सफलतापूर्वक थपियो");
            return redirect()->route('mother-tongue.index');

        } catch (\Exception $error) {
            DB::rollBack();
            Session::flash('error', $error->getMessage());
            return redirect()->back();
        }
    }

    public function show(MotherTongue $motherTongue) {
        Session::flash('info', "माफ गर्नुहोस्! अनुरोध गरिएको यूआरआई फेला पार्न असमर्थ");
        return redirect()->back();
    }

    public function edit($id) {
        $motherTongue = MotherTongue::find($id);
        return view('population.mother_tongue.edit')
            ->with('numberConverter', new NumberConverter)
            ->with('motherTongue', $motherTongue);
    }

    public function update(MotherTongueRequest $request, $id, NumberConverter $numberConverter) {
        try {
            $motherTongue = MotherTongue::find($id);
            $slicedArray = array_slice($request->all(), 3);
            $total = array_sum($slicedArray);

            DB::beginTransaction();

            $motherTongue->ward_no = $numberConverter->devanagari($request->ward_no);
            $motherTongue->nepali = $numberConverter->devanagari($request->nepali);
            $motherTongue->maithili = $numberConverter->devanagari($request->maithili);
            $motherTongue->bhojpuri = $numberConverter->devanagari($request->bhojpuri);
            $motherTongue->tharu = $numberConverter->devanagari($request->tharu);
            $motherTongue->hindi = $numberConverter->devanagari($request->hindi);
            $motherTongue->urdu = $numberConverter->devanagari($request->urdu);
            $motherTongue->bantawa = $numberConverter->devanagari($request->bantawa);
            $motherTongue->tamang = $numberConverter->devanagari($request->tamang);
            $motherTongue->jhagad = $numberConverter->devanagari($request->jhagad);
            $motherTongue->others = $numberConverter->devanagari($request->others);
            $motherTongue->not_included = $numberConverter->devanagari($request->not_included);
            $motherTongue->total = $numberConverter->devanagari($total);
            $motherTongue->save();

            DB::commit();

            Session::flash('success', "विवरण सफलतापूर्वक परिवर्तन गरियो");
            return redirect()->route('mother-tongue.index');

        } catch (\Exception $error) {
            DB::rollBack();
            Session::flash('error', $error->getMessage());
            return redirect()->back();
        }
    }

    public function destroy($id) {
        $motherTongue = MotherTongue::find($id);
        if ($motherTongue) {
            $motherTongue->delete();
            return response("वडा नं ".$motherTongue->ward_no. " को विवरण सफलतापूर्वक हटाइएको छ");
        } else {
            return response("डाटा हटाउन असमर्थ");
        }
    }
}
