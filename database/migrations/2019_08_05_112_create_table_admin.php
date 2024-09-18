<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAdmin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->increments('id');
            $table->string('KdAdmin');
            $table->string('NamaAdmin');
            $table->string('Email')->unique();
            $table->string('Password');
            $table->rememberToken();
            $table->string('NoTlp');
            $table->integer('Jabatan')->unsigned()->unique();
            $table->timestamps();

            $table->foreign('Jabatan')->references('id')->on('jabatans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
}
