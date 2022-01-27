<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolsTable extends Migration
{
    public function up()
    {
        Schema::create('rols', function (Blueprint $table) {
            //Primary Key
            $table->id();
            //Fields
            $table->string('nombre_rol', 50);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('rols');
    }
}
