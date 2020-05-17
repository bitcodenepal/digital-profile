<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIncomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incomes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedTinyInteger('ward_no');
            $table->unsignedInteger('lowest')->default(0);
            $table->unsignedInteger('below_average')->default(0);
            $table->unsignedInteger('average')->default(0);
            $table->unsignedInteger('above_average')->default(0);
            $table->unsignedInteger('highest')->default(0);
            $table->unsignedInteger('not_included')->default(0);
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
        Schema::dropIfExists('incomes');
    }
}
