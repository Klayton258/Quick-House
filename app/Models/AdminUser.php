<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Hash;

class AdminUser extends Authenticatable
{
    use HasFactory, SoftDeletes;

    protected $guard = 'admin';

    protected $fillable =
    [
        'name',
        'username',
        'email',
        'password',
        'email_verified',
        'phone',
        'birthdate',
        'role',
    ];

    protected $dates = ['deleted_at'];

    public function setPasswordAttribute($value){

        return $this->attributes['password'] = Hash::needsRehash($value) ? Hash::make($value) : $value;
    }
}
