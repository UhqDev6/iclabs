<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Praktikum extends Model
{
    protected $table = 'praktikum';
    protected $primarykey = 'id_praktikum';
    use Notifiable;

    protected $guard = 'assistant';

    protected $fillable = [
       'kd_mp','praktikum',
    ];

    protected $hidden = [
        'password','remember_token',
    ];
}
