<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tuition extends Model
{
    protected $table = 'spp_nioni';
    protected $primaryKey = 'id_spp';
    protected $fillable = [
        'tahun',
        'nominal'
    ];
    
    public function students()
    {
        return $this->hasMany(Students::class);
    }
}
