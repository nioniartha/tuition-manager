<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    protected $table = 'siswa_nioni';
    protected $primaryKey = 'id_siswa';
    protected $fillable = [
        'nisn',
        'nis',
        'nama',
        'no_telp',
        'alamat',
        'kelas_id_kelas',
        'tuition_id_spp'
    ];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }

    public function tuition()
    {
        return $this->belongsTo(Tuition::class);
    }
}
