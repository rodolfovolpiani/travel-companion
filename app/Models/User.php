<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class User extends Model implements AuthenticatableContract
{
    use HasFactory, Notifiable, SoftDeletes, Authenticatable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'data_nascimento',
    ];

    protected $dates = ['deleted_at'];
}
