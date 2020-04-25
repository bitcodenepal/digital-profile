<?php

namespace App\Municipality;

use Illuminate\Database\Eloquent\Model;

class Surface extends Model
{
    protected $fillable = ['ward_no', 'unit', 'first', 'second', 'third', 'fourth'];
}
