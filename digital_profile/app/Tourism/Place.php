<?php

namespace App\Tourism;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $fillable = ['name', 'ward_no', 'availability', 'distance', 'allocation', 'importance', 'economy'];
}
