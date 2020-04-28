<?php

namespace App\Population;

use Illuminate\Database\Eloquent\Model;

class MotherTongue extends Model
{
    protected $fillable = ['ward_no', 'nepali', 'maithili', 'bhojpuri', 'tharu', 'hindi', 'urdu', 'bantawa', 'tamang', 'jhagad', 'others', 'not_included', 'total'];
}
