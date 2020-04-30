<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBridgesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bridges', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->tinyInteger('ward_no');
            $table->string('name')->charset('utf8')->collation('utf8_unicode_ci');
            $table->string('river')->charset('utf8')->collation('utf8_unicode_ci')->nullable();
            $table->integer('date');
            $table->string('from')->charset('utf8')->collation('utf8_unicode_ci');
            $table->string('to')->charset('utf8')->collation('utf8_unicode_ci');
            $table->decimal('length', 5, 1);
            $table->string('type')->charset('utf8')->collation('utf8_unicode_ci');
            $table->string('condition')->charset('utf8')->collation('utf8_unicode_ci');
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
        Schema::dropIfExists('bridges');
    }
}
