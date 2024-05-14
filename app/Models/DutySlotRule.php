<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DutySlotRule extends Model
{
    use HasFactory;
    public function dutySlot(){
        return $this->hasOne(DutySlot::class, 'id', 'duty_slot_id');
    }
}
