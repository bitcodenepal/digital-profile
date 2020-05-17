<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVocationalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vocationals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedTinyInteger('ward_no');
            $table->unsignedInteger('tailor')->default(0);
            $table->unsignedInteger('communication')->default(0);
            $table->unsignedInteger('construction')->default(0);
            $table->unsignedInteger('mechanic')->default(0);
            $table->unsignedInteger('agriculture')->default(0);
            $table->unsignedInteger('health')->default(0);
            $table->unsignedInteger('veterinary')->default(0);
            $table->unsignedInteger('tourism')->default(0);
            $table->unsignedInteger('industry')->default(0);
            $table->unsignedInteger('others')->default(0);
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
        Schema::dropIfExists('vocationals');
    }
}
