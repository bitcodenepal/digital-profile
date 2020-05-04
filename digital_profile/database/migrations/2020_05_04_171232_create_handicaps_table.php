<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHandicapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('handicaps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->tinyInteger('ward_no');
            $table->integer('physical')->default(0);
            $table->integer('mental')->default(0);
            $table->integer('blind')->default(0);
            $table->integer('deaf')->default(0);
            $table->integer('dumb')->default(0);
            $table->integer('psycho')->default(0);
            $table->integer('healthy')->default(0);
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
        Schema::dropIfExists('handicaps');
    }
}
