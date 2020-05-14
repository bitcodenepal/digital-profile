<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedTinyInteger('ward_no');
            $table->string('name')->charset('utf8')->collation('utf8_unicode_ci');
            $table->decimal('area', 6,2)->default(0.00);
            $table->enum('type', ['सामुदायिक', 'साझेदारी', 'निजी', 'राष्ट्रिय र सरकारी'])->charset('utf8')->collation('utf8_unicode_ci');
            $table->integer('houses')->default(0);
            $table->decimal('wood', 6,2)->default(0.00);
            $table->decimal('firewood', 6,2)->default(0.00);
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
        Schema::dropIfExists('forests');
    }
}
