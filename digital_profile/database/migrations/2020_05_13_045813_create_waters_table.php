<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWatersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('waters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedTinyInteger('ward_no');
            $table->integer('pipe_tap')->default(0);
            $table->integer('public_tap')->default(0);
            $table->integer('deep_boring')->default(0);
            $table->integer('tap')->default(0);
            $table->integer('closed_well')->default(0);
            $table->integer('open_well')->default(0);
            $table->integer('original')->default(0);
            $table->integer('river')->default(0);
            $table->integer('others')->default(0);
            $table->integer('total')->default(0);
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
        Schema::dropIfExists('waters');
    }
}
