<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{

    protected $fillable = ['name', 'department_id'];

    public function department()
    {
        return $this->belongsTo(Department::class,'department_id');
    }

    public function projects()
    {
        return $this->belongsToMany(Project::class,'employee_project', 'employee_id','project_id');
    }

    public function address()
    {
        return $this->hasOne(Address::class,'employee_id'); 
    }
}
