<?php

namespace App\Population;

use Illuminate\Database\Eloquent\Model;

class Caste extends Model
{
    protected $fillable = ['ward_no', 'hill_brahmin', 'terai_brahmin', 'hill_tribe', 'terai_tribe', 'hill_low', 'terai_low', 'muslim', 'hill_others', 'terai_others', 'not_included', 'total'];
}
