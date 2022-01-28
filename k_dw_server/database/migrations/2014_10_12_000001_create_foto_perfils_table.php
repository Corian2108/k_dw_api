<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFotoPerfilsTable extends Migration
{
    public function up()
    {
        Schema::create('foto_perfils', function (Blueprint $table) {
            //Primary key
            $table->id();
            //Fields
            $table->string('ruta', 150);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('foto_perfils');
    }
}
