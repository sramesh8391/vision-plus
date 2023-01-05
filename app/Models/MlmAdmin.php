<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class MlmAdmin extends Authenticatable
{

    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'mlm_admin';
    protected $primaryKey = 'admin_id';

    protected $fillable = [
        'admin_username',
        'password',
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];
}
