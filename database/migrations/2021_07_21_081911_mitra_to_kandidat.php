<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MitraToKandidat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mitraToKandidat', static function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('idMitra')->nullable();
            $table->foreign('idMitra', 'mitra_id_fk_202107212')->references('id')->on('mitra');
            $table->unsignedInteger('idKandidat')->nullable();
            $table->foreign('idKandidat', 'kandidat_id_fk_202107213')->references('id')->on('kandidat');
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
    }
}
