<?php

namespace App\Models;

// use QuantaQuirk\Contracts\Auth\MustVerifyEmail;
use QuantaQuirk\Database\Eloquent\Factories\HasFactory;
use QuantaQuirk\Foundation\Auth\User as Authenticatable;
use QuantaQuirk\Notifications\Notifiable;
use QuantaQuirk\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

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

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
