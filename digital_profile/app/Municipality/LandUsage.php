<?php

namespace App\Municipality;

use Illuminate\Database\Eloquent\Model;

class LandUsage extends Model
{
    protected $fillable = ['land_type', 'area', 'percentage'];
}
