<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'kelas_nioni';
    protected $primaryKey = 'id_kelas';
    protected $fillable = [
        'kelas',
        'id_jurusan'
    ];

    public function vocational()
    {
        return $this->belongsTo(Vocational::class);
    }
}
