<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswaNioniTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa_nioni', function (Blueprint $table) {
            $table->increments('id_siswa');
            $table->string('nisn')->unique();
            $table->rememberToken();
            $table->string('nis');
            $table->string('nama');
            $table->string('no_telp', 13);
            $table->text('alamat');
            $table->integer('kelas_id_kelas')->unsigned();
            $table->integer('tuition_id_spp')->unsigned();
            $table->timestamps();
            
            $table->foreign('kelas_id_kelas')->references('id_kelas')->on('kelas_nioni')->onDelete('cascade');
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
        Schema::dropIfExists('siswa_nioni');
    }
}
