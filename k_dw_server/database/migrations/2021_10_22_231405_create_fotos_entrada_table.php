<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFotosEntradaTable extends Migration
{
    public function up()
    {
        Schema::create('fotos_entrada', function (Blueprint $table) {
            //Primary Key
            $table->id();
            //Foreign Key
            $table->unsignedBigInteger('id_entrada');
            //Relations
            $table->foreign('id_entrada')
                ->references('id')
                ->on('entradas')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('fotos_entrada');
    }
}
