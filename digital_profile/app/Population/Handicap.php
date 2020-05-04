<?php

namespace App\Population;

use Illuminate\Database\Eloquent\Model;

class Handicap extends Model
{
    protected $fillable = ['ward_no', 'physical', 'mental', 'blind', 'dumb', 'deaf', 'psycho', 'healthy', 'not_included', 'total'];
}
