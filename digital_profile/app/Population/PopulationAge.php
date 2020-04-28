<?php

namespace App\Population;

use Illuminate\Database\Eloquent\Model;

class PopulationAge extends Model
{
    protected $fillable = ['ward_no', 'male_five', 'female_five', 'male_six', 'female_six', 'male_fifteen', 'female_fifteen', 'male_nineteen', 'female_nineteen', 'male_twenty_five', 'female_twenty_five', 'male_fifty', 'female_fifty', 'male_sixty', 'female_sixty', 'male_seventy', 'female_seventy'];
}
