<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLiteraciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('literacies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedTinyInteger('ward_no');
            $table->decimal('literate_male', 5, 2)->default(0);
            $table->decimal('literate_female', 5, 2)->default(0);
            $table->decimal('total_literate', 5, 2)->default(0);
            $table->decimal('illiterate_male', 5, 2)->default(0);
            $table->decimal('illiterate_female', 5, 2)->default(0);
            $table->decimal('total_illiterate', 5, 2)->default(0);
            $table->decimal('minor_male', 5, 2)->default(0);
            $table->decimal('minor_female', 5, 2)->default(0);
            $table->decimal('total_minor', 5, 2)->default(0);
            $table->decimal('not_included', 5, 2)->default(0);
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
        Schema::dropIfExists('literacies');
    }
}
