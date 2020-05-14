<?php

namespace App\Disaster;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    protected $fillable = ['ward_no', 'safe_built', 'unsafe_built', 'total_safety', 'built_for_quakes', 'not_built_for_quakes', 'total_quakes'];
}
