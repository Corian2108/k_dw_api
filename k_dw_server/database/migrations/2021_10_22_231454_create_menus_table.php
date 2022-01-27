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
            //Relations
            $table->foreign('id_evento')
            ->references('id')
            ->on('eventos')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('id_entrada')
            ->references('id')
            ->on('entradas')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('id_fuerte')
            ->references('id')
            ->on('fuertes')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('id_postre')
            ->references('id')
            ->on('postres')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('id_bebida')
            ->references('id')
            ->on('bebidas')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('menus');
    }
}
