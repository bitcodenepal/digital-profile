<?php

namespace App\Health;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    protected $fillable = ['name', 'ward_no', 'position', 'working', 'bed', 'maternity', 'lab', 'clinic', 'radiography', 'family_planning', 'vaccination', 'motherhood', 'nutrition', 'blood', 'pharmacy', 'optometry', 'health_education', 'consultation', 'specialist', 'physician', 'assistant', 'nurse', 'worker', 'midwifery', 'technician'];
}
