<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventosTable extends Migration
{
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            //Primary Key
            $table->id();
            //Foreign Key
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_lugar');
            //Fields
            $table->string('nombre', 100);
            $table->string('descripcion', 500);
            $table->date('fecha');
            $table->time('hora');
            $table->float('precio');
            $table->integer('aforo');
            $table->timestamps();
            //Relations
            $table->foreign('id_user')
                ->references('id')
                ->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('id_lugar')
            ->references('id')
            ->on('lugars')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('eventos');
    }
}
