<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    use HasFactory;

    protected $fillable = [
        'number',
        'seats',
        'point_of_sale_id',
    ];

    public function pointOfSale()
    {
        return $this->belongsTo(PointOfSale::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

}
