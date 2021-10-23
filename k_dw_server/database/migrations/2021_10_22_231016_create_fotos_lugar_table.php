<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFotosLugarTable extends Migration
{
    public function up()
    {
        Schema::create('fotos_lugar', function (Blueprint $table) {
            //Primary Key
            $table->id();
            //Foreign Key
            $table->unsignedBigInteger('id_lugar');
            //Relations
            $table->foreign('id_lugar')
                ->references('id')
                ->on('lugares')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('fotos_lugar');
    }
}
