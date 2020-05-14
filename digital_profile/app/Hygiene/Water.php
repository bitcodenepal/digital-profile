<?php

namespace App\Hygiene;

use Illuminate\Database\Eloquent\Model;

class Water extends Model
{
    protected $fillable = ['ward_no', 'pipe_tap', 'public_tap', 'deep_boring', 'tap', 'closed_well', 'open_well', 'original', 'river', 'others', 'total'];
}
