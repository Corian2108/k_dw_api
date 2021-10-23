<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            //Primary Key
            $table->id();
            //Foreign Key
            $table->unsignedBigInteger('id_evento');
            $table->unsignedBigInteger('id_entrada');
            $table->unsignedBigInteger('id_fuerte');
            $table->unsignedBigInteger('id_postre');
            $table->unsignedBigInteger('id_bebida');
            //Fields
            $table->string('nombre', 100);
            $table->string('descripcion', 500);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('menus');
    }
}
