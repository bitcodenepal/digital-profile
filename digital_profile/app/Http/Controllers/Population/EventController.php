<?php

namespace App\Http\Controllers\Population;

use App\Http\Controllers\Controller;
use App\Http\Requests\Population\EventRequest;
use App\Population\Event;
use App\Services\NumberConverter;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

/**
 * class EventController
 * 
 * @package: App\Http\Controllers\Population
 * @author: Shashank Jha <shashankj677@gmail.com>
 */

class EventController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view('population.event.index')
            ->with('events', Event::all())
            ->with('numberConverter', new NumberConverter);
    }

    public function create() {
        return view('population.event.create');
    }

    public function store(EventRequest $request) {
        try {
            DB::beginTransaction();
            Event::create($request->validated());
            DB::commit();

            Session::flash('success', 'विवरण सफलतापूर्वक थपियो');
            return redirect()->route('event.index');
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
        $event = Event::findOrFail($id);
        return view('population.event.edit')
            ->with('event', $event);
    }

    public function update(EventRequest $request, $id) {
        try {
            $event = Event::findOrFail($id);

            DB::beginTransaction();
            $event->update($request->validated());
            DB::commit();
            
            Session::flash('success', "विवरण सफलतापूर्वक परिवर्तन गरियो");
            return redirect()->route('event.index');

        } catch (\Exception $error) {
            DB::rollBack();
            Session::flash('error', $error->getMessage());
            return redirect()->back();
        }
    }

    public function destroy($id) {
        $event = Event::find($id);
        if ($event) {
            $event->delete();
            return response("वडा नं ".$event->ward_no. " को विवरण सफलतापूर्वक हटाइएको छ");
        } else {
            return response("डाटा हटाउन असमर्थ");
        }
    }
}
