<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntradasTable extends Migration
{
    public function up()
    {
        Schema::create('entrada', function (Blueprint $table) {
            //Primary Key
            $table->id();
            //Fields
            $table->string('nombre', 100);
            $table->string('descripcion', 200);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('entradas');
    }
}
