<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOccupationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('occupations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->tinyInteger('ward_no');
            $table->integer('agriculture')->default(0);
            $table->integer('job')->default(0);
            $table->integer('business')->default(0);
            $table->integer('labor')->default(0);
            $table->integer('agency')->default(0);
            $table->integer('foreign')->default(0);
            $table->integer('student')->default(0);
            $table->integer('housewives')->default(0);
            $table->integer('unemployed')->default(0);
            $table->integer('early')->default(0);
            $table->integer('others')->default(0);
            $table->integer('not_included')->default(0);
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
        Schema::dropIfExists('occupations');
    }
}
