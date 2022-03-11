<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFotoLugarsTable extends Migration
{
    public function up()
    {
        Schema::create('foto_lugars', function (Blueprint $table) {
            //Primary Key
            $table->id();
            //Fields
            $table->string('ruta', 150);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('foto_lugars');
    }
}
