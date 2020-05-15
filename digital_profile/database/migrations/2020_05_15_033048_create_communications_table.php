<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommunicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('communications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedTinyInteger('ward_no');
            $table->unsignedInteger('radio')->default(0);
            $table->unsignedInteger('tv')->default(0);
            $table->unsignedInteger('mobile')->default(0);
            $table->unsignedInteger('computer')->default(0);
            $table->unsignedInteger('internet')->default(0);
            $table->unsignedInteger('fridge')->default(0);
            $table->unsignedInteger('bike')->default(0);
            $table->unsignedInteger('car')->default(0);
            $table->unsignedInteger('bus')->default(0);
            $table->unsignedInteger('none')->default(0);
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
        Schema::dropIfExists('communications');
    }
}
