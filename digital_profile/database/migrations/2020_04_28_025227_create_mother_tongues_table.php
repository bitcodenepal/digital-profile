<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMotherTonguesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mother_tongues', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ward_no')->charset('utf8')->collation('utf8_unicode_ci');
            $table->string('nepali')->charset('utf8')->collation('utf8_unicode_ci');
            $table->string('maithili')->charset('utf8')->collation('utf8_unicode_ci');
            $table->string('bhojpuri')->charset('utf8')->collation('utf8_unicode_ci');
            $table->string('tharu')->charset('utf8')->collation('utf8_unicode_ci');
            $table->string('hindi')->charset('utf8')->collation('utf8_unicode_ci');
            $table->string('urdu')->charset('utf8')->collation('utf8_unicode_ci');
            $table->string('bantawa')->charset('utf8')->collation('utf8_unicode_ci');
            $table->string('tamang')->charset('utf8')->collation('utf8_unicode_ci');
            $table->string('jhagad')->charset('utf8')->collation('utf8_unicode_ci');
            $table->string('others')->charset('utf8')->collation('utf8_unicode_ci');
            $table->string('not_included')->charset('utf8')->collation('utf8_unicode_ci');
            $table->string('total')->charset('utf8')->collation('utf8_unicode_ci');
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
        Schema::dropIfExists('mother_tongues');
    }
}
