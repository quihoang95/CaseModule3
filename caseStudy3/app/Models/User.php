<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'fullName',
        'image',
        'user_name',
        'password',
        'phoneNumber',
        'address',
        'status',
        'role_id'
    ];
    protected $hidden = [
        'password'
    ];
//    public $timestamps = false;

    function role()
    {
        return $this->belongsTo(Role::class, 'role_id');
    }

    function getNameImage()
    {
        return '/storage/images/' . ltrim($this->image, '/public/images/');
    }
}
