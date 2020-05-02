<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReligionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('religions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->tinyInteger('ward_no');
            $table->integer('hindu')->default(0);
            $table->integer('bouddha')->default(0);
            $table->integer('islam')->default(0);
            $table->integer('christian')->default(0);
            $table->integer('kirat')->default(0);
            $table->integer('jain')->default(0);
            $table->integer('others')->default(0);
            $table->integer('not_included')->default(0);
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
        Schema::dropIfExists('religions');
    }
}
