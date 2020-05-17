<?php

namespace App\Economy;

use Illuminate\Database\Eloquent\Model;

class Vocational extends Model
{
    protected $fillable = ['ward_no', 'tailor', 'communication', 'construction', 'mechanic', 'agriculture', 'health', 'veterinary', 'tourism', 'industry', 'others', 'not_included'];
}
