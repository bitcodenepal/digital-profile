<?php

namespace App\Infrastructure\Fuel;

use Illuminate\Database\Eloquent\Model;

class Gas extends Model
{
    protected $fillable = ['ward_no', 'wood', 'petrol', 'lp', 'dung', 'dung_roll', 'electricity', 'others', 'total'];
}
