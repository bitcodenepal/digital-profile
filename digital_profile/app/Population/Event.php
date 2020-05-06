<?php

namespace App\Population;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['ward_no', 'birth', 'death', 'marriage', 'immigration', 'emigration'];
}
