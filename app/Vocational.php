<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vocational extends Model
{
    protected $table = 'jurusan_nioni';
    protected $primaryKey = 'id_jurusan';
    protected $fillable = [
        'jurusan'
    ];
}
