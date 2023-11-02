<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\UserAdmin as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class UserAdmin extends Model
{
    use HasFactory;
    protected $table="users_admin";
    protected $fillable = [
        'name',
        'email',
        'password',
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
