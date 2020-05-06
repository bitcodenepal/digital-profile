<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarriagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marriages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->tinyInteger('ward_no');
            $table->integer('unmarried')->default(0);
            $table->integer('single')->default(0);
            $table->integer('multiple')->default(0);
            $table->integer('remarried')->default(0);
            $table->integer('widowed')->default(0);
            $table->integer('divorced')->default(0);
            $table->integer('separated')->default(0);
            $table->integer('early')->default(0);
            $table->integer('not_included')->default(0);
            $table->integer('total')->default(0);
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
        Schema::dropIfExists('marriages');
    }
}
