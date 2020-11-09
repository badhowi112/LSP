<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mobil extends Model
{
    //
    protected $table = 'tbl_master_mobil';
     protected $fillable = ['kode_mobil','merek_mobil','no_pol','tahun_sewa','harga_sewa','stok'];

}
