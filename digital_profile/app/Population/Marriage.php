<?php

namespace App\Population;

use Illuminate\Database\Eloquent\Model;

class Marriage extends Model
{
    protected $fillable = ['ward_no', 'unmarried', 'single', 'multiple', 'remarried', 'widowed', 'divorced', 'separated', 'early', 'not_included', 'total'];
}
