<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{

    protected $fillable = ['id','address'];

    public function employee()
    {
        return $this->belongsTo(Employee::class,'emp_id');
    }
}
 