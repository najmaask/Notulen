<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePeserta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesertas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('anggota_id')->unsigned()->unique();
            $table->integer('laporan_id')->unsigned()->unique();
            $table->integer('notulen_id')->unsigned()->unique();
            $table->timestamps();

            $table->foreign('anggota_id')->references('id')->on('anggotas');
            $table->foreign('laporan_id')->references('id')->on('laporans');
            $table->foreign('notulen_id')->references('id')->on('notulens');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesertas');
    }
}
