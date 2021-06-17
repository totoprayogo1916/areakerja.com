<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Wish extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wish', function (Blueprint $table) {
            $table->increments('id');

            $table->string('ip');

            $table->string('idJob');
        });
    }

}
