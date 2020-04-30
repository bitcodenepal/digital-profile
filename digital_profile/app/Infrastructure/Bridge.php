<?php

namespace App\Infrastructure;

use Illuminate\Database\Eloquent\Model;

class Bridge extends Model
{
    protected $fillable = ['ward_no', 'name', 'river', 'date', 'from', 'to', 'length', 'type', 'condition'];
}
