<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    protected $fillable = ['name,'];

    public function employees()
    {
        return $this->belongsToMany(Employee::class,'employee_project','project_id','employee_id');
    }
}
