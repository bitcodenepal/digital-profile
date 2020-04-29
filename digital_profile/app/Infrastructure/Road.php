<?php

namespace App\Infrastructure;

use Illuminate\Database\Eloquent\Model;

class Road extends Model
{
    protected $fillable = ['ward_no', 'name', 'from', 'to', 'length', 'type', 'population'];
}
