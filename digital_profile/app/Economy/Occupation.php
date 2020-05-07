<?php

namespace App\Economy;

use Illuminate\Database\Eloquent\Model;

class Occupation extends Model
{
    protected $fillable = ['ward_no', 'agriculture', 'job', 'business', 'labor', 'agency', 'foreign', 'student', 'housewives', 'unemployed', 'early', 'others', 'not_included'];
}
