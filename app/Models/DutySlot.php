<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DutySlot extends Model
{
    use HasFactory;
    public function dutySlotRule($date='')
    {
        return $this->hasOne(DutySlotRule::class, 'duty_slot_id')
            ->where('rule_for', 'duty_slot')
            ->where('start_date', '<=', $date)
            ->where('end_date', '>=', $date)
            ->orderBy('start_date', 'desc')
            ->first();
    }
}
