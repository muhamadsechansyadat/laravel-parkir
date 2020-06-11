<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $fillable=['parkir_id','jumlah_jam','bayar','kembalian','total'];
}
