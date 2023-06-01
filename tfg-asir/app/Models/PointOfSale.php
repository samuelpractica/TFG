<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PointOfSale extends Model
{
    protected $fillable = ['name', 'address', 'phone'];
}
