<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Designations extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'designations';


    // public function designation()
    // {
    //     return $this->belongsTo(Designations::class);
    // }
}
