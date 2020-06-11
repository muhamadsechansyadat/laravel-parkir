<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parkir extends Model
{
    protected $fillable = ['jenis_kendaraan','plat_nomor','nama_kendaraan','jam_keluar','nama_pemilik'];
}
