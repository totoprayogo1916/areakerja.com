<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalonkandidatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calonkandidats', static function (Blueprint $table) {
            $table->increments('id');
            $table->string('namalengkap');
            $table->string('alamat');
            $table->string('biografi');
            $table->string('skillutama');
            $table->longText('namaskill')->nullable();
            $table->longText('rangeskill')->nullable();
            $table->longText('school')->nullable();
            $table->longText('tahun')->nullable();
            $table->longText('organisasi')->nullable();
            $table->longText('jabatan')->nullable();
            $table->longText('kantor')->nullable();
            $table->longText('pekerjaan')->nullable();
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
        Schema::dropIfExists('calonkandidats');
    }
}
