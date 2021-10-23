<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFotosPostreTable extends Migration
{
    public function up()
    {
        Schema::create('fotos_postre', function (Blueprint $table) {
            //Primary Key
            $table->id();
            //Foreig Key
            $table->unsignedBigInteger('id_postre');
            //Relations
            $table->foreign('id_postre')
                ->references('id')
                ->on('postres')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('fotos_postre');
    }
}
