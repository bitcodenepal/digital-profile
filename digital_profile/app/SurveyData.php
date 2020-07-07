<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SurveyData extends Model
{
    protected $fillable = ['surveyor_name', 'survey_date', 'owner_name', 'ward_no', 'locality', 'path_name', 'members', 'female', 'male', 'foreign_employment', 'handicapped', 'drinking_water', 'other_source_water', 'toilet', 'bank_account', 'annual_income', 'crops', 'pulses', 'oil', 'vegetable', 'cash_crops', 'fruits', 'animals', 'fishery', 'training', 'no_of_houses', 'house_type', 'mother_tongue', 'caste', 'religion', 'location', 'latitude', 'longitude', 'altitude', 'precisions'];
}
