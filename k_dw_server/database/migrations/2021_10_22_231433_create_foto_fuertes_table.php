<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFotoFuertesTable extends Migration
{
    public function up()
    {
        Schema::create('foto_fuertes', function (Blueprint $table) {
            //Primary Key
            $table->id();
            //Foreign Key
            $table->unsignedBigInteger('id_fuerte');
            //Relations
            $table->foreign('id_fuerte')
                ->references('id')
                ->on('fuertes')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('foto_fuertes');
    }
}
