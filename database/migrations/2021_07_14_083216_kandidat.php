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

            $table->string('username');

            $table->string('skillUtama')->nullable();

            $table->string('domisili')->nullable();

            $table->string('biografi')->nullable();

            $table->string('slug')->nullable();
            $table->timestamps();
        });
    }
}
