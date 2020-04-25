<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSurfacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surfaces', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ward_no')->charset('utf8')->collation('utf8_unicode_ci');
            $table->string('unit')->charset('utf8')->collation('utf8_unicode_ci');
            $table->string('first')->charset('utf8')->collation('utf8_unicode_ci');
            $table->string('second')->charset('utf8')->collation('utf8_unicode_ci');
            $table->string('third')->charset('utf8')->collation('utf8_unicode_ci');
            $table->string('fourth')->charset('utf8')->collation('utf8_unicode_ci');
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
        Schema::dropIfExists('surfaces');
    }
}
