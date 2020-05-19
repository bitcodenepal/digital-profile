<?php

namespace App\Agriculture;

use Illuminate\Database\Eloquent\Model;

class Alternative extends Model
{
    protected $fillable = ['ward_no', 'pond', 'area', 'fish', 'hive', 'honey'];
}
