<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Officers extends Authenticatable
{
    use Notifiable;

    protected $guard = 'admin';
    
    protected $table = 'petugas_nioni';
    protected $primaryKey = 'id_petugas';
    protected $fillable = [
        'username',
        'password',
        'nama_petugas',
        'level'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
