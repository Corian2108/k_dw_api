<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailsTable extends Migration
{
    public function up()
    {
        Schema::create('details', function (Blueprint $table) {
            $table->id();
            $table->integer('cantidad');
            $table->float('total');
            $table->timestamps();
            //foreign key
            $table->unsignedBigInteger('dish_id');
            //relacion tabla platos
            $table->foreign('dish_id')->references('id')
                ->on('dishes')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('details');
    }
}
