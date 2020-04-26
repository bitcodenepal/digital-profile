<?php

namespace App\Http\Controllers\Municipality;

use App\Http\Controllers\Controller;
use App\Http\Requests\Municipality\SurfaceRequest;
use App\Municipality\Surface;
use App\Services\NumberConverter;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

/**
 * class SurfaceController
 * 
 * @package: App\Http\Controllers\Municipality
 * @author: Shashank Jha <shashankj677@gmail.com>
 */

class SurfaceController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view('municipality.surface.surface_table')
            ->with('surfaces', Surface::all());
    }

    public function create() {
        return view('municipality.surface.create');
    }

    public function store(SurfaceRequest $request, NumberConverter $numberConverter) {
        try {
            DB::beginTransaction();

            $surface = new Surface;
            $surface->ward_no = $numberConverter->devanagari($request->ward_no);
            $surface->unit = $request->unit;
            $surface->first = $numberConverter->devanagari($request->first);
            $surface->second = $numberConverter->devanagari($request->second);
            $surface->third = $numberConverter->devanagari($request->third);
            $surface->fourth = $numberConverter->devanagari($request->fourth);
            $surface->save();

            DB::commit();

            Session::flash('success', "विवरण सफलतापूर्वक थपियो");
            return redirect()->route('municipality-surface.index');
        } catch (\Exception $error) {
            DB::rollBack();
            Session::flash('error', $error->getMessage());
            return redirect()->back();
        }
    }

    public function show() {
        return redirect()->back();
    }

    public function edit($id) {
        $surface = Surface::find($id);
        if($surface) {
            return view('municipality.surface.edit')
                ->with('surface', $surface);
        } else {
            return view('municipality.surface.not_found');
        }
    }

    public function update(SurfaceRequest $request, $id, NumberConverter $numberConverter) {
        $surface = Surface::find($id);
        if($surface) {
            try {
                DB::beginTransaction();
    
                $surface->ward_no = $numberConverter->devanagari($request->ward_no);
                $surface->unit = $request->unit;
                $surface->first = $numberConverter->devanagari($request->first);
                $surface->second = $numberConverter->devanagari($request->second);
                $surface->third = $numberConverter->devanagari($request->third);
                $surface->fourth = $numberConverter->devanagari($request->fourth);
                $surface->save();
    
                DB::commit();
    
                Session::flash('success', "विवरण सफलतापूर्वक परिवर्तन गरियो");
                return redirect()->route('municipality-surface.index');
            } catch (\Exception $error) {
                DB::rollBack();
                Session::flash('error', $error->getMessage());
                return redirect()->back();
            }
        } else {
            return view('municipality.surface.not_found');
        }
    }

    public function destroy($id) {
        $surface = Surface::find($id);
        if ($surface) {
            $surface->delete();
            return response("वडा नं ".$surface->ward_no. " को विवरण सफलतापूर्वक हटाइएको छ");
        } else {
            return response("डाटा हटाउन असमर्थ");
        }
    }
}
