<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trades', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->charset('utf8')->collation('utf8_unicode_ci');
            $table->enum('quantity', ['मेट्रिक टन', 'क्विन्टल', 'किलोग्राम', 'लिटर', 'क्यारेट'])->charset('utf8')->collation('utf8_unicode_ci');
            $table->decimal('import', 15,2)->default(0);
            $table->decimal('export', 15,2)->default(0);
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
        Schema::dropIfExists('trades');
    }
}
