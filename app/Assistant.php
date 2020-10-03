<?php

namespace App;


use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Assistant extends Authenticatable
{
    use Notifiable;
    protected $table = 'assistants';
    protected $primarykey = 'id';

    protected $guard = 'assistant';

    protected $fillable = [
           'name', 'stambuk','email','password','image',
    ];

    protected $hidden = [
        'password','remember_token',
    ];
}
