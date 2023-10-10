<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;


class user_create extends Authenticatable
{
    use HasFactory;
    use Notifiable;

    protected $table = 'user_create';
    protected $fillable = [
        'name','user_id','password',
    ];

}
