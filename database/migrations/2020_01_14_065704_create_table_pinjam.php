<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePinjam extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_pinjam', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('tgl');
            $table->integer('id_anggota');
            $table->integer('id_petugas');
            $table->date('tgl_kembali');
            $table->string('denda', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_pinjam');
    }
}
