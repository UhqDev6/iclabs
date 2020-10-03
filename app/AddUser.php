<?php

namespace App;


use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class AddUser extends  Authenticatable
{
    protected $table = 'assistants';
    protected $primarykey = 'id';
    use Notifiable;

    protected $guard = 'assistant';

    protected $fillable = [
       'name', 'stambuk','email','password','image',
    ];

    protected $hidden = [
        'password','remember_token',
    ];
}
