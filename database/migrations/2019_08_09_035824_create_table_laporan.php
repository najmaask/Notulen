<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableLaporan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('KdLaporan');
            $table->date('TglLaporan');
            $table->integer('KdAnggota')->unsigned()->unique();
            $table->string('IsiLaporan');
            $table->integer('KdAdmin')->unsigned()->unique();
            $table->timestamps();

            $table->foreign('KdAnggota')->references('id')->on('anggotas');
            $table->foreign('KdAdmin')->references('id')->on('admins');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laporans');
    }
}
