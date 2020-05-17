<?php

namespace App\Economy;

use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    protected $fillable = ['ward_no', 'lowest', 'below_average', 'average', 'above_average', 'highest', 'not_included'];
}
