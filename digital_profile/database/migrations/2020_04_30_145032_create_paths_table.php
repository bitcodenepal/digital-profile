<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePathsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paths', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->tinyInteger('ward_no');
            $table->string('name')->charset('utf8')->collation('utf8_unicode_ci')->nullable();
            $table->string('from')->charset('utf8')->collation('utf8_unicode_ci');
            $table->string('to')->charset('utf8')->collation('utf8_unicode_ci');
            $table->decimal('length', 3, 1);
            $table->unsignedBigInteger('population');
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
        Schema::dropIfExists('paths');
    }
}
