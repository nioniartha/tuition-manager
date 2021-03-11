<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKelasNioniTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelas_nioni', function (Blueprint $table) {
            $table->increments('id_kelas');
            $table->string('kelas');
            $table->integer('id_jurusan')->unsigned();
            $table->timestamps();

            $table->foreign('id_jurusan')->references('id_jurusan')->on('jurusan_nioni')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kelas_nioni');
    }
}
