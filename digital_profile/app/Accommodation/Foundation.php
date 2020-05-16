<?php

namespace App\Accommodation;

use Illuminate\Database\Eloquent\Model;

class Foundation extends Model
{
    protected $fillable = ['ward_no', 'mud', 'cement', 'frame', 'load', 'wood', 'others', 'total'];
}
