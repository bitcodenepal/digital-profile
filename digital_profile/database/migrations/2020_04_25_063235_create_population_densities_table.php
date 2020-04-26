<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePopulationDensitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('population_densities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ward_no')->charset('utf8')->collation('utf8_unicode_ci');
            $table->string('population')->charset('utf8')->collation('utf8_unicode_ci');
            $table->string('population_percent')->charset('utf8')->collation('utf8_unicode_ci');
            $table->string('area')->charset('utf8')->collation('utf8_unicode_ci');
            $table->string('area_percent')->charset('utf8')->collation('utf8_unicode_ci');
            $table->string('population_density')->charset('utf8')->collation('utf8_unicode_ci');
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
        Schema::dropIfExists('population_densities');
    }
}
