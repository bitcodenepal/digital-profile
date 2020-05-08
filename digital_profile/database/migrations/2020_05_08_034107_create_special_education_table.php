<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpecialEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('special_education', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->tinyInteger('ward_no');
            $table->integer('agriculture_male')->default(0)->nullable();
            $table->integer('agriculture_female')->default(0)->nullable();
            $table->integer('engineering_male')->default(0)->nullable();
            $table->integer('engineering_female')->default(0)->nullable();
            $table->integer('forestry_male')->default(0)->nullable();
            $table->integer('forestry_female')->default(0)->nullable();
            $table->integer('medicine_male')->default(0)->nullable();
            $table->integer('medicine_female')->default(0)->nullable();
            $table->integer('law_male')->default(0)->nullable();
            $table->integer('law_female')->default(0)->nullable();
            $table->integer('journalism_male')->default(0)->nullable();
            $table->integer('journalism_female')->default(0)->nullable();
            $table->integer('total')->default(0)->nullable();
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
        Schema::dropIfExists('special_education');
    }
}
