<?php

namespace App\Agriculture;

use Illuminate\Database\Eloquent\Model;

class Dairy extends Model
{
    protected $fillable = ['ward_no', 'cow', 'cow_milk', 'buffalo', 'buffalo_milk', 'total_cattle', 'total_milk'];
}
