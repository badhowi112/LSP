<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableMasterMobil extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('tbl_master_mobil', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kode_mobil');
            
            $table->string('merek_mobil');
            $table->string('no_pol');
            $table->timestamp('tahun_sewa');
            $table->bigInteger('harga_sewa');
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
