<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Login extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable =[
        'user',
        'password',
        'tipo_user'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
    
}
