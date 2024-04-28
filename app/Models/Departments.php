<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Departments extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'departments';


    // public function department()
    // {
    //     return $this->belongsTo(Departments::class);
    // }

    // public function empDepartment()
    // {
    //     return $this->hasOne(Departments::class, 'id', 'department');
    // }
}
