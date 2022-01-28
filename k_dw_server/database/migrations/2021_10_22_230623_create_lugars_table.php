<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLugarsTable extends Migration
{
    public function up()
    {
        Schema::create('lugars', function (Blueprint $table) {
            //Primary Key
            $table->id();
            //Foreign Key
            $table->unsignedBigInteger('id_foto');
            //Fields
            $table->string('nombre', 100);
            $table->string('ubicacion', 150);
            $table->string('zona', 150);
            $table->timestamps();
            //Relations
            $table->foreign('id_foto')
                ->references('id')
                ->on('foto_lugars')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('lugars');
    }
}
