<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePopulationDistributionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('population_distributions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ward_no')->charset('utf8')->collation('utf8_unicode_ci');
            $table->string('household_number')->charset('utf8')->collation('utf8_unicode_ci');
            $table->string('male_number')->charset('utf8')->collation('utf8_unicode_ci');
            $table->string('female_number')->charset('utf8')->collation('utf8_unicode_ci');
            $table->string('total')->charset('utf8')->collation('utf8_unicode_ci');
            $table->string('average_family')->charset('utf8')->collation('utf8_unicode_ci');
            $table->string('gender_ratio')->charset('utf8')->collation('utf8_unicode_ci');
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
        Schema::dropIfExists('population_distributions');
    }
}
