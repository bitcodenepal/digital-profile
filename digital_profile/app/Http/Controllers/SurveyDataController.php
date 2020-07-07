<?php

namespace App\Http\Controllers;

use App\SurveyData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SurveyDataController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index(Request $request) {
        if ($request->method() == "POST") {

            $surveyData = SurveyData::query();

            if ($request->ward_no) {
                $surveyData->where('ward_no', '=', $request->ward_no);
            }
            
            if ($request->locality) {
                $surveyData->where('locality', '=', $request->locality);
            }

            if ($request->annual_income) {
                $surveyData->where('annual_income', $request->annual_income, 100000.000);
            }

            if ($request->mother_tongue) {
                $surveyData->where('mother_tongue', '=', $request->mother_tongue);
            }

            if ($request->caste) {
                $surveyData->where('caste', '=', $request->caste);
            }
            
            if ($request->religion) {
                $surveyData->where('religion', '=', $request->religion);
            }

            $surveyData = $surveyData->get();

        } else {
            $surveyData = SurveyData::all();
        }
        
        return view('survey_data.survey_data_table')
            ->with('surveyData', $surveyData)
            ->with('i', $i=1);
    }

    public function show($id) {
        $surveyData = SurveyData::findOrFail($id);
        $householdDetails = DB::table('household_details')->where('survey_data_id', $id)->get();
        $landDetails = DB::table('land_details')->where('survey_data_id', $id)->get();
        $animalDetails = DB::table('animal_details')->where('survey_data_id', $id)->get();
        $meatDetails = DB::table('meat_details')->where('survey_data_id', $id)->get();
        
        return view('survey_data.show', compact('surveyData', 'householdDetails', 'landDetails', 'animalDetails', 'meatDetails'));
    }

    public function getLocality($wardNo) {
        $locality = SurveyData::where('ward_no', $wardNo)->distinct('locality')->pluck('locality');
        return response($locality);
    }
}
