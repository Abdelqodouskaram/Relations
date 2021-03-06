<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{

    protected $fillable = ['address'];

    public function employee()
    {
        return $this->belongsTo(Employee::class,'emp_id');
    }
}
 