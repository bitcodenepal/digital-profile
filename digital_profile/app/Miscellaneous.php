<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Miscellaneous extends Model
{
    protected $fillable = ['ward_no', 'name', 'usage', 'area', 'allocation', 'economy', 'clients'];
}
