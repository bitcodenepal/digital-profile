<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forest extends Model
{
    protected $fillable = ['ward_no', 'name', 'area', 'type', 'houses', 'wood', 'firewood'];
}
