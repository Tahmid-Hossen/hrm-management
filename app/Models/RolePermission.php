<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RolePermission extends Model
{
    public function roles()
    {
        return $this->belongsToMany(Roles::class, 'role_permissions');
    }
}
