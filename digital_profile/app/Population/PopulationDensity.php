<?php

namespace App\Population;

use Illuminate\Database\Eloquent\Model;

class PopulationDensity extends Model
{
    protected $fillable = ['ward_no', 'population', 'population_percent', 'area', 'area_percent', 'population_density'];
}
