<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCastesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('castes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->tinyInteger('ward_no');
            $table->integer('hill_brahmin')->default(0);
            $table->integer('terai_brahmin')->default(0);
            $table->integer('hill_tribe')->default(0);
            $table->integer('terai_tribe')->default(0);
            $table->integer('hill_low')->default(0);
            $table->integer('terai_low')->default(0);
            $table->integer('muslim')->default(0);
            $table->integer('hill_others')->default(0);
            $table->integer('terai_others')->default(0);
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
        Schema::dropIfExists('castes');
    }
}
