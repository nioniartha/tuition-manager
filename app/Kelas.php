<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'kelas_nioni';
    protected $primaryKey = 'id_kelas';
    protected $fillable = [
        'kelas',
        'vocational_id_jurusan'
    ];

    public function vocational()
    {
        return $this->belongsTo(Vocational::class);
    }
    public function students()
    {
        return $this->hasMany(Students::class);
    }
}
