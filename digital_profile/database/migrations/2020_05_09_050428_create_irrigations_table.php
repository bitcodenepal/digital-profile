<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIrrigationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('irrigations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->charset('utf8')->collation('utf8_unicode_ci');
            $table->tinyInteger('ward_no');
            $table->enum('type', ['कुलो', 'पाईप', 'नहर'])->charset('utf8')->collation('utf8_unicode_ci');
            $table->string('unit')->charset('utf8')->collation('utf8_unicode_ci');
            $table->integer('quantity')->default(0);
            $table->enum('availability', ['वर्षभरी', 'मौसमी'])->charset('utf8')->collation('utf8_unicode_ci');
            $table->integer('beneficial')->default(0);
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
        Schema::dropIfExists('irrigations');
    }
}
