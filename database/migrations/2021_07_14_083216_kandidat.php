<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Kandidat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kandidat', static function (Blueprint $table) {
            $table->increments('id');

            $table->string('nama');

            $table->string('skillUtama')->nullable();

            $table->string('domisili')->nullable();

            $table->string('biografi')->nullable();

            $table->string('slug')->nullable();

            $table->unsignedInteger('idUser')->nullable();
            $table->foreign('idUser', 'user_id_fk_202107211')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }
}
