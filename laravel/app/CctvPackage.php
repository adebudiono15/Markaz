<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CctvPackage extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'paket_kamera', 'photo', 'merk_dvr', 'unit_kamera', 'hdd', 'kabel', 'kapasitas_psu', 'kabel_connector', 'tombol_wa'
    ];

    protected $hidden = [];
}
