<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Students extends Authenticatable
{
    use Notifiable;
    protected $guard = 'student';

    protected $table = 'siswa_nioni';
    protected $primaryKey = 'id_siswa';
    protected $fillable = [
        'nisn',
        'password',
        'nis',
        'nama',
        'no_telp',
        'alamat',
        'kelas_id_kelas',
        'tuition_id_spp'
    ];

    protected $hidden = [
        'remember_token',
    ];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }

    public function tuition()
    {
        return $this->belongsTo(Tuition::class);
    }
    public function payment()
    {
        return $this->hasMany(Payment::class);
    }
}
