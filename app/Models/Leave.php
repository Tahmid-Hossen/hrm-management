<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function leave_type()
    {
        return $this->belongsTo(LeaveType::class);
    }

    // public function employee()
    // {
    //     return $this->belongsTo(Employee::class);
    // }
}
