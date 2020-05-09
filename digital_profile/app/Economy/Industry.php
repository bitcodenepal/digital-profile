<?php

namespace App\Economy;

use Illuminate\Database\Eloquent\Model;

class Industry extends Model
{
    protected $fillable = ['name', 'type', 'category', 'workers', 'product', 'economy'];
}
