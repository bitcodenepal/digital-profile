<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedTinyInteger('ward_no');
            $table->unsignedInteger('safe_built');
            $table->unsignedInteger('unsafe_built');
            $table->unsignedInteger('total_safety');
            $table->unsignedInteger('built_for_quakes');
            $table->unsignedInteger('not_built_for_quakes');
            $table->unsignedInteger('total_quakes');
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
        Schema::dropIfExists('houses');
    }
}
