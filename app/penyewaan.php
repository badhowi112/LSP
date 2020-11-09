<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class penyewaan extends Model
{
    //
    protected $table = 'tbl_penyewaan_mobil';
    protected $fillable = ['kode_penyewaan','nama_konsumen','id_kode_mobil','jumlah','tgl_penyewaan','tgl_pengembalian','total_bayar'];
}
