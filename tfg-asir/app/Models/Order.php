<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['employee_id', 'description'];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
