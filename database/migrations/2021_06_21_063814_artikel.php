<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Artikel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artikel', function (Blueprint $table) {
            $table->increments('id');

            $table->string('title');

            $table->string('image')->nullable();

            $table->longText('des_singkat')->nullable();

            $table->longText('des1')->nullable();

            $table->longText('des2')->nullable();

            $table->longText('des3')->nullable();

            $table->longText('des4')->nullable();

            $table->longText('des5')->nullable();

            $table->longText('des6')->nullable();

            $table->longText('des7')->nullable();

            $table->string('judul_singkat')->nullable();

            $table->longText('penghantar')->nullable();

            $table->string('judulisi1')->nullable();

            $table->longText('isi11')->nullable();

            $table->longText('isi12')->nullable();

            $table->longText('isi13')->nullable();

            $table->longText('isi14')->nullable();

            $table->longText('isi15')->nullable();

            $table->longText('isi16')->nullable();

            $table->string('judulisi2')->nullable();

            $table->longText('isi21')->nullable();

            $table->longText('isi22')->nullable();

            $table->longText('isi23')->nullable();

            $table->longText('isi24')->nullable();

            $table->longText('isi25')->nullable();

            $table->longText('isi26')->nullable();

            $table->string('judulisi3')->nullable();

            $table->longText('isi31')->nullable();

            $table->longText('isi32')->nullable();

            $table->longText('isi33')->nullable();

            $table->longText('isi34')->nullable();

            $table->longText('isi35')->nullable();

            $table->longText('isi36')->nullable();

            $table->string('judulisi4')->nullable();

            $table->longText('isi41')->nullable();

            $table->longText('isi42')->nullable();

            $table->longText('isi43')->nullable();

            $table->longText('isi44')->nullable();

            $table->longText('isi45')->nullable();

            $table->longText('isi46')->nullable();

            $table->string('judulisi5')->nullable();

            $table->longText('isi51')->nullable();

            $table->longText('isi52')->nullable();

            $table->longText('isi53')->nullable();

            $table->longText('isi54')->nullable();

            $table->longText('isi55')->nullable();

            $table->longText('isi56')->nullable();

            $table->timestamps();

            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    // public function down()
    // {
    //     //
    // }
}
