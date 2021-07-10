<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Mitra extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mitra', static function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('email');
            $table->string('deskripsi');
            $table->string('alamat');
            $table->string('no')->nullable();
            $table->string('logo');
            $table->integer('koin')->nullable();
            $table->unsignedInteger('idUser')->nullable();
            $table->foreign('idUser', 'user_id_fk_2021071')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }
}