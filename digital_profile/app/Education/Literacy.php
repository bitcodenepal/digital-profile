<?php

namespace App\Education;

use Illuminate\Database\Eloquent\Model;

class Literacy extends Model
{
    protected $fillable = ['ward_no', 'literate_male', 'literate_female', 'total_literate', 'illiterate_male', 'illiterate_female', 'total_illiterate', 'minor_male', 'minor_female', 'total_minor', 'not_included'];
}
