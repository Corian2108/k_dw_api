<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFotoEntradasTable extends Migration
{
    public function up()
    {
        Schema::create('foto_entradas', function (Blueprint $table) {
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
        Schema::dropIfExists('foto_entradas');
    }
}
