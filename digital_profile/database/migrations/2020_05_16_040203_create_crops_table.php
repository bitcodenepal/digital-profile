<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCropsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crops', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedTinyInteger('ward_no');
            $table->decimal('crop_area', 15, 2)->default(0);
            $table->decimal('crop_production', 15, 2)->default(0);
            $table->decimal('crop_sold', 15, 2)->default(0);
            $table->decimal('pulse_area', 15, 2)->default(0);
            $table->decimal('pulse_production', 15, 2)->default(0);
            $table->decimal('pulse_sold', 15, 2)->default(0);
            $table->decimal('oil_area', 15, 2)->default(0);
            $table->decimal('oil_production', 15, 2)->default(0);
            $table->decimal('oil_sold', 15, 2)->default(0);
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
        Schema::dropIfExists('crops');
    }
}
