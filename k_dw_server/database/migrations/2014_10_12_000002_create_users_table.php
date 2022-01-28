<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            //Primary Key
            $table->id();
            //Foreign Keys
            $table->unsignedBigInteger('id_rol');
            $table->unsignedBigInteger('id_foto_perfils');
            //Fields
            $table->string('nombre', 100);
            $table->string('email', 100)->unique();
            $table->string('clave', 16);
            $table->string('descripcion', 200);
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
            //Relations
            $table->foreign('id_rol')
                ->references('id')
                ->on('rols')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('id_foto_perfils')
                ->references('id')
                ->on('foto_perfils')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
