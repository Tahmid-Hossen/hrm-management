<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
     protected $table = 'roles';
    // public function users()
    // {
    //     return $this->hasMany(User::class, 'role_id', 'id');
    // }
    // public function permissions()
    // {
    //     return $this->belongsToMany(Permission::class, 'role_permissions');
    // }

    public function permissions()
    {
        return $this->belongsToMany(Permission::class, 'roles_permissions');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'users_roles');
    }
}