<?php

namespace App\Infrastructure;

use Illuminate\Database\Eloquent\Model;

class Path extends Model
{
    protected $fillable = ['ward_no', 'name', 'from', 'to', 'length', 'population'];
}
