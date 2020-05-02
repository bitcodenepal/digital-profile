<?php

namespace App\Infrastructure\Fuel;

use Illuminate\Database\Eloquent\Model;

class Electricity extends Model
{
    protected $fillable = ['ward_no', 'electricity', 'petrol', 'bio', 'solar', 'others', 'total'];
}
