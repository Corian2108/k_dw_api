<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFotoPostresTable extends Migration
{
    public function up()
    {
        Schema::create('foto_postres', function (Blueprint $table) {
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
        Schema::dropIfExists('foto_postres');
    }
}
