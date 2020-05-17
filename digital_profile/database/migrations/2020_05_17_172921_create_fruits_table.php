<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFruitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fruits', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedTinyInteger('ward_no');
            $table->decimal('fruit_area', 15, 2)->default(0);
            $table->decimal('fruit_production', 15, 2)->default(0);
            $table->decimal('fruit_sold', 15, 2)->default(0);
            $table->decimal('veggie_area', 15, 2)->default(0);
            $table->decimal('veggie_production', 15, 2)->default(0);
            $table->decimal('veggie_sold', 15, 2)->default(0);
            $table->decimal('cash_area', 15, 2)->default(0);
            $table->decimal('cash_production', 15, 2)->default(0);
            $table->decimal('cash_sold', 15, 2)->default(0);
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
        Schema::dropIfExists('fruits');
    }
}
