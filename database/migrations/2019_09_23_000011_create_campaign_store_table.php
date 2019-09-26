<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampaignStoreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaign_store', function (Blueprint $table) {
            // $table->bigIncrements('id');
            $table->unsignedBigInteger('campaign_id');
            $table->foreign('campaign_id')->references('id')->on('campaigns');
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
        Schema::dropIfExists('campaign_store');
    }
}
