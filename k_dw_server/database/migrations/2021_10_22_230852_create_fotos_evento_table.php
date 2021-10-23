<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFotosEventoTable extends Migration
{
    public function up()
    {
        Schema::create('fotos_evento', function (Blueprint $table) {
            //Primary Key
            $table->id();
            //Foreign Key
            $table->unsignedBigInteger('id_evento');
            //Relations
            $table->foreign('id_evento')
                ->references('id')
                ->on('eventos')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('fotos_evento');
    }
}
