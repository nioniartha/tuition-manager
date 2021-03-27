<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'pembayaran_nioni';
    protected $primaryKey = 'id_pembayaran';
    protected $fillable = [
        'tgl_bayar',
        'bulan_dibayar',
        'bulan_sudah_bayar',
        'sisa_bulan_bayar',
        'tahun_dibayar',
        'jumlah_bayar',
        'officers_id_petugas',
        'students_id_siswa',
        'tuition_id_spp'
    ];
    public function officers()
    {
        return $this->belongsTo(Officers::class);
    }

    public function students()
    {
        return $this->belongsTo(Students::class);
    }

    public function tuition()
    {
        return $this->belongsTo(Tuition::class);
    }
    
}
