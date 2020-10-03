<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class JadwalAsisten extends Model
{
    protected $table = 'jadwal';
    protected $primarykey = 'id_jadwal';
    use Notifiable;

    protected $guard = 'assistant';

    protected $fillable = [
       'waktu','id','id_status','id_praktikum','id_ruangan',
    ];

    protected $hidden = [
        'password','remember_token',
    ];
}
