<?php

namespace App\Agriculture;

use Illuminate\Database\Eloquent\Model;

class Irrigation extends Model
{
    protected $fillable = ['name', 'ward_no', 'type', 'unit', 'quantity', 'availability', 'beneficial'];
}
