<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndustriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('industries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->charset('utf8')->collation('utf8_unicode_ci');
            $table->enum('type', ['निजी', 'सरकारी', 'अर्धसरकारी'])->charset('utf8')->collation('utf8_unicode_ci');
            $table->enum('category', ['सानो', 'मझौला', 'मध्यम', 'ठुलो'])->charset('utf8')->collation('utf8_unicode_ci');
            $table->integer('workers')->default(0);
            $table->string('product')->charset('utf8')->collation('utf8_unicode_ci');
            $table->integer('economy')->default(0);
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
        Schema::dropIfExists('industries');
    }
}
