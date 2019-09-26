<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoreElementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('store_elements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('element_id');
            $table->foreign('element_id')->references('id')->on('elements');
            $table->unsignedInteger('store_id');
            $table->foreign('store_id')->references('id')->on('stores');
            $table->integer('quantity')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('store_elements');
    }
}
