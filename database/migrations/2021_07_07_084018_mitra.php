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
            $table->string('username')->nullable();
            $table->string('password')->nullable();
            $table->string('email');
            $table->string('deskripsi');
            $table->string('alamat');
            $table->string('no')->nullable();
            $table->string('logo');
            $table->integer('koin')->nullable();
            $table->timestamps();
        });
    }
}
