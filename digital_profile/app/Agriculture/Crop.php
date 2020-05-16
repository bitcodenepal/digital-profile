<?php

namespace App\Agriculture;

use Illuminate\Database\Eloquent\Model;

class Crop extends Model
{
    protected $fillable = ['ward_no', 'crop_area', 'crop_production', 'crop_sold', 'pulse_area', 'pulse_production', 'pulse_sold', 'oil_area', 'oil_production', 'oil_sold'];
}
