<?php

namespace App\Agriculture;

use Illuminate\Database\Eloquent\Model;

class Fruit extends Model
{
    protected $fillable = ['ward_no', 'fruit_area', 'fruit_production', 'fruit_sold', 'veggie_area', 'veggie_production', 'veggie_sold', 'cash_area', 'cash_production', 'cash_sold'];
}
