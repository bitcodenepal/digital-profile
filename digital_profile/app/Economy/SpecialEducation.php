<?php

namespace App\Economy;

use Illuminate\Database\Eloquent\Model;

class SpecialEducation extends Model
{
    protected $fillable = ['ward_no', 'agriculture_male', 'agriculture_female', 'engineering_male', 'engineering_female', 'forestry_male', 'forestry_female', 'medicine_male', 'medicine_female', 'law_male', 'law_female', 'journalism_male', 'journalism_female', 'total'];
}
