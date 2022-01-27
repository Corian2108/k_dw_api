<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFotoPerfilsTable extends Migration
{
    public function up()
    {
        Schema::create('foto_perfils', function (Blueprint $table) {
            //Primary key
            $table->id();
            //Foreign key
            $table->unsignedBigInteger('id_user');
            //Relations
            $table->foreign('id_user')
                ->references('id')
                ->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('foto_perfils');
    }
}