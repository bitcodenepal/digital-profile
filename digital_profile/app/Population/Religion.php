<?php

namespace App\Population;

use Illuminate\Database\Eloquent\Model;

class Religion extends Model
{
    protected $fillable = ['ward_no', 'hindu', 'bouddha', 'islam', 'christian', 'kirat', 'jain', 'others', 'not_included', 'total'];
}
