<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMiscellaneousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('miscellaneouses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedTinyInteger('ward_no');
            $table->string('name')->charset('utf8')->collation('utf8_unicode_ci');
            $table->enum('usage', ['खेलकुद', 'मनोरंजन', 'पिकनिक'])->charset('utf8')->collation('utf8_unicode_ci');
            $table->decimal('area', 6,2)->default(0.00);
            $table->enum('allocation', ['सरकारी', 'सार्वजनिक'])->charset('utf8')->collation('utf8_unicode_ci');
            $table->unsignedBigInteger('economy')->default(0);
            $table->unsignedBigInteger('clients')->default(0);
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
        Schema::dropIfExists('miscellaneouses');
    }
}
