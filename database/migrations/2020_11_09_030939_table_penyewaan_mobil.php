<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TablePenyewaanMobil extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('tbl_penyewaan_mobil', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode_penyewaan');
            $table->string('nama_konsumen');
            $table->integer('id_kode_mobil');
            $table->integer('jumlah');
            $table->date('tgl_penyewaan');
            $table->date('tgl_pengembalian');
            $table->integer('total_bayar');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
