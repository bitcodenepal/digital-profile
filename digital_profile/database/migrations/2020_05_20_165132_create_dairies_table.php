<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDairiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dairies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedTinyInteger('ward_no');
            $table->unsignedInteger('cow')->default(0);
            $table->decimal('cow_milk', 11,2)->default(0);
            $table->unsignedInteger('buffalo')->default(0);
            $table->decimal('buffalo_milk', 11,2)->default(0);
            $table->unsignedInteger('total_cattle')->default(0);
            $table->decimal('total_milk', 11,2)->default(0);
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
        Schema::dropIfExists('dairies');
    }
}
