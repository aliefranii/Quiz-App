<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    // Jika Anda menggunakan UUID sebagai primary key
    protected $keyType = 'string';  // Pastikan keyType adalah string jika menggunakan UUID
    public $incrementing = false;  // Pastikan auto-incrementing tidak digunakan

    protected $fillable = [
        'name', 'email', 'password', 'role',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}

