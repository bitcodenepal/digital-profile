<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Communication extends Model
{
    protected $fillable = ['ward_no', 'radio', 'tv', 'mobile', 'computer', 'internet', 'fridge', 'bike', 'car', 'bus', 'none'];
}
