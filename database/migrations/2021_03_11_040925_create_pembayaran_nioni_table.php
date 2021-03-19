<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembayaranNioniTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembayaran_nioni', function (Blueprint $table) {
            $table->increments('id_pembayaran');
            $table->date('tgl_bayar');
            $table->string('bulan_dibayar');
            $table->string('tahun_dibayar');
            $table->double('jumlah_bayar');
            $table->integer('officers_id_petugas')->unsigned();
            $table->integer('students_id_siswa')->unsigned();
            $table->integer('tuition_id_spp')->unsigned();
            $table->timestamps();

            $table->foreign('officers_id_petugas')->references('id_petugas')->on('petugas_nioni')->onDelete('cascade');
            $table->foreign('students_id_siswa')->references('id_siswa')->on('siswa_nioni')->onDelete('cascade');
            $table->foreign('tuition_id_spp')->references('id_spp')->on('spp_nioni')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembayaran_nioni');
    }
}
