<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Asisten extends Model
{
    protected $table = 'status';
    protected $primarykey = 'id_status';
    use Notifiable;

    protected $guard = 'assistant';

    protected $fillable = [
       'status','id',
    ];

    protected $hidden = [
        'password','remember_token',
    ];
}
