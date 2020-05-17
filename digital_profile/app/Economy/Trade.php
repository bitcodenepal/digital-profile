<?php

namespace App\Economy;

use Illuminate\Database\Eloquent\Model;

class Trade extends Model
{
    protected $fillable = ['name', 'quantity', 'import', 'export'];
}
