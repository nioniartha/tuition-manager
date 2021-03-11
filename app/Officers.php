<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Officers extends Model
{
    protected $table = 'petugas_nioni';
    protected $primaryKey = 'id_petugas';
    protected $fillable = [
        'username',
        'password',
        'nama_petugas',
        'level'
    ];
}
