<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            //foreign keys
            $table->unsignedBigInteger('detail_id');
            $table->unsignedBigInteger('table_id');
            $table->unsignedBigInteger('state_id');
            //relaciones
            $table->foreign('detail_id')->references('id')
                ->on('details')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('table_id')->references('id')
                ->on('tables')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('state_id')->references('state_id')
                ->on('states')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
