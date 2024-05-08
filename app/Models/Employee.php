<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use SoftDeletes;
    protected $table = 'employees';

    public function empEducation()
    {
        return $this->hasMany(EmployeeEducation::class, 'emp_id');
    }

    public function empDepartment()
    {
        return $this->hasOne(Departments::class, 'id', 'department');
    }

    public function empDesignation()
    {
        return $this->hasOne(Designations::class, 'id', 'designation');
    }
    public function empCompany()
    {
        return $this->hasOne(Company::class, 'id', 'company');
    }
    public function empDocuments()
    {
        return $this->hasMany(EmployeeDocument::class, 'emp_id', );
    }
    public function user()
    {
        return $this->hasOne(User::class, 'emp_id', 'id');
    }
}
