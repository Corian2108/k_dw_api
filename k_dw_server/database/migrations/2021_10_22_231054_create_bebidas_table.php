<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBebidasTable extends Migration
{
    public function up()
    {
        Schema::create('bebidas', function (Blueprint $table) {
            //Primary Key
            $table->id();
            //Fields
            $table->string('nombre', 100);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bebidas');
    }
}
