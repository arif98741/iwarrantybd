<?php

namespace App\Models;

use App\Notifications\SubscriberResetPassword;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Subscriber extends Authenticatable
{
    use Notifiable;


    protected $fillable = [
        'name', 'email', 'password', 'mobile'
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];


    public function sendPasswordResetNotification($token)
    {
        $this->notify(new SubscriberResetPassword($token));
    }

    public function claims()
    {
        return $this->hasMany(Claims::class);
    }
}