<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableHistory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historys', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_historydone')->unsigned()->unique();
            $table->integer('id_historyprob')->unsigned()->unique();
            $table->integer('id_historytodo')->unsigned()->unique();
            $table->timestamps();

            $table->foreign('id_historydone')->references('id')->on('laporans');
            $table->foreign('id_historydone')->references('id')->on('laporans');
            $table->foreign('id_historytodo')->references('id')->on('laporans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historys');
    }
}
