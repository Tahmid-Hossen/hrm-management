<?php

namespace App\Models;


use App\Traits\HasPermissionsTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes, HasPermissionsTrait;

    protected $table = 'users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];




    // public function role()
    // {
    //     return $this->belongsTo(Role::class, 'role_id');
    // }
    // public function permissions()
    // {
    //     return $this->hasManyThrough(
    //         Permission::class,
    //         RolePermission::class,
    //         'role_id', // Foreign key on role_permissions table
    //         'id', // Foreign key on permissions table
    //         'role_id', // Local key on users table
    //         'permission_id' // Local key on role_permissions table
    //     );
    // }
    public function company()
    {
        return $this->hasOne(Company::class, 'id', 'company_id');
    }

}
