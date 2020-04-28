<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePopulationAgesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('population_ages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ward_no')->charset('utf8')->collation('utf8_unicode_ci');
            $table->string('male_five')->charset('utf8')->collation('utf8_unicode_ci');
            $table->string('female_five')->charset('utf8')->collation('utf8_unicode_ci');
            $table->string('male_six')->charset('utf8')->collation('utf8_unicode_ci');
            $table->string('female_six')->charset('utf8')->collation('utf8_unicode_ci');
            $table->string('male_fifteen')->charset('utf8')->collation('utf8_unicode_ci');
            $table->string('female_fifteen')->charset('utf8')->collation('utf8_unicode_ci');
            $table->string('male_nineteen')->charset('utf8')->collation('utf8_unicode_ci');
            $table->string('female_nineteen')->charset('utf8')->collation('utf8_unicode_ci');
            $table->string('male_twenty_five')->charset('utf8')->collation('utf8_unicode_ci');
            $table->string('female_twenty_five')->charset('utf8')->collation('utf8_unicode_ci');
            $table->string('male_fifty')->charset('utf8')->collation('utf8_unicode_ci');
            $table->string('female_fifty')->charset('utf8')->collation('utf8_unicode_ci');
            $table->string('male_sixty')->charset('utf8')->collation('utf8_unicode_ci');
            $table->string('female_sixty')->charset('utf8')->collation('utf8_unicode_ci');
            $table->string('male_seventy')->charset('utf8')->collation('utf8_unicode_ci');
            $table->string('female_seventy')->charset('utf8')->collation('utf8_unicode_ci');
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
        Schema::dropIfExists('population_ages');
    }
}
