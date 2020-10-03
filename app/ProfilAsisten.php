<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfilAsisten extends Model
{
    protected $table = 'profil';
    protected $primarykey = 'id_profil';

    protected $fillable =[
        'id','prestasi','organisasi','keterampilan',
    ];
}
