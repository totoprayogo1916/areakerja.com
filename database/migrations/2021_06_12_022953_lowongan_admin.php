<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LowonganAdmin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lowongan', function (Blueprint $table) {
            $table->increments('id');

            $table->string('namaperusahaan');

            $table->string('deskripsiperusahaan');

            $table->string('alamatperusahaan');

            $table->string('gambar');

            $table->string('title');

            $table->string('short_description')->nullable();

            $table->longText('full_description')->nullable();

            $table->longText('requirements')->nullable();

            $table->string('job_nature')->nullable();

            $table->string('pendidikan')->nullable();

            $table->string('gender')->nullable();

            $table->string('umur')->nullable();

            $table->string('bataslamaran')->nullable();

            $table->string('salary');

            $table->string('email')->nullable();

            $table->string('notelp')->nullable();

            $table->string('web')->nullable();

            $table->timestamps();

            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
