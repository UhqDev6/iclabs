<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Ruangan extends Model
{
    protected $table = 'ruangan';
    protected $primarykey = 'id_ruangan';
    use Notifiable;

    protected $guard = 'assistant';

    protected $fillable = [
       'kd_ruangan','ruangan',
    ];

    protected $hidden = [
        'password','remember_token',
    ];
}
