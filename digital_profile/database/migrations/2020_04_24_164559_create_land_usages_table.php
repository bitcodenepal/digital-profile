<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLandUsagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('land_usages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('land_type')->charset('utf8')->collation('utf8_unicode_ci');
            $table->string('area')->charset('utf8')->collation('utf8_unicode_ci');
            $table->string('percentage')->charset('utf8')->collation('utf8_unicode_ci');
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
        Schema::dropIfExists('land_usages');
    }
}
