<?php

namespace App\Population;

use Illuminate\Database\Eloquent\Model;

class PopulationDistribution extends Model
{
    protected $fillable = ['ward_no', 'household_number', 'male_number', 'female_number', 'total', 'average_family', 'gender_ratio'];
}
