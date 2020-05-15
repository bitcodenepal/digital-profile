<?php

namespace App\Http\Controllers;

use App\Communication;
use App\Http\Requests\CommunicationRequest;
use App\Services\NumberConverter;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

/**
 * class CommunicationController
 * 
 * @package: App\Http\Controllers
 * @author: Shashank Jha <shashankj677@gmail.com>
 */

class CommunicationController extends Controller
{
    public function __construct() {
        $this->middleware('auth');    
    }

    public function index() {
        return view('communication.index')
            ->with('communications', Communication::all())
            ->with('numberConverter', new NumberConverter);
    }

    public function create() {
        return view('communication.create');
    }

    public function store(CommunicationRequest $request) {
        try {
            DB::beginTransaction();
            Communication::create($request->validated());
            DB::commit();

            Session::flash('success', 'विवरण सफलतापूर्वक थपियो');
            return redirect()->route('communication.index');
            
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
        $communication = Communication::findOrFail($id);
        return view('communication.edit')
            ->with('communication', $communication);
    }

    public function update(CommunicationRequest $request, $id) {
        try {
            $communication = Communication::findOrFail($id);

            DB::beginTransaction();
            $communication->update($request->validated());
            DB::commit();

            Session::flash('success', "विवरण सफलतापूर्वक परिवर्तन गरियो");
            return redirect()->route('communication.index');

        } catch (\Exception $error) {
            DB::rollBack();
            Session::flash('error', $error->getMessage());
            return redirect()->back();
        }
    }

    public function destroy($id) {
        $communication = Communication::find($id);
        if ($communication) {
            $communication->delete();
            return response("वडा नम्बर ".$communication->ward_no. " को विवरण सफलतापूर्वक हटाइएको छ");
        } else {
            return response("डाटा हटाउन असमर्थ");
        }
    }
}
