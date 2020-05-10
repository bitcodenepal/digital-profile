<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('places', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->charset('utf8')->collation('utf8_unicode_ci');
            $table->integer('ward_no');
            $table->enum('availability', ['पुगेको छ', 'पुगेको छैन'])->charset('utf8')->collation('utf8_unicode_ci');
            $table->unsignedInteger('distance')->default(0);
            $table->enum('allocation', ['सामुदायिक', 'सार्वजनिक'])->charset('utf8')->collation('utf8_unicode_ci');
            $table->enum('importance', ['धार्मिक', 'ऐतिहासिक', 'पर्यटकीय'])->charset('utf8')->collation('utf8_unicode_ci');
            $table->unsignedBigInteger('economy')->default(0);
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
        Schema::dropIfExists('places');
    }
}
