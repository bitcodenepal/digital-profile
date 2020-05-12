<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHospitalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospitals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->charset('utf8')->collation('utf8_unicode_ci');
            $table->unsignedTinyInteger('ward_no');
            $table->unsignedInteger('position')->default(0);
            $table->unsignedInteger('working')->default(0);
            $table->unsignedInteger('bed')->default(0);
            $table->enum('maternity', ['छ', 'छैन'])->charset('utf8')->collation('utf8_unicode_ci');
            $table->enum('lab', ['छ', 'छैन'])->charset('utf8')->collation('utf8_unicode_ci');
            $table->enum('clinic', ['छ', 'छैन'])->charset('utf8')->collation('utf8_unicode_ci');
            $table->enum('radiography', ['छ', 'छैन'])->charset('utf8')->collation('utf8_unicode_ci');
            $table->enum('family_planning', ['छ', 'छैन'])->charset('utf8')->collation('utf8_unicode_ci');
            $table->enum('vaccination', ['छ', 'छैन'])->charset('utf8')->collation('utf8_unicode_ci');
            $table->enum('motherhood', ['छ', 'छैन'])->charset('utf8')->collation('utf8_unicode_ci');
            $table->enum('nutrition', ['छ', 'छैन'])->charset('utf8')->collation('utf8_unicode_ci');
            $table->enum('blood', ['छ', 'छैन'])->charset('utf8')->collation('utf8_unicode_ci');
            $table->enum('pharmacy', ['छ', 'छैन'])->charset('utf8')->collation('utf8_unicode_ci');
            $table->enum('optometry', ['छ', 'छैन'])->charset('utf8')->collation('utf8_unicode_ci');
            $table->enum('health_education', ['छ', 'छैन'])->charset('utf8')->collation('utf8_unicode_ci');
            $table->enum('consultation', ['छ', 'छैन'])->charset('utf8')->collation('utf8_unicode_ci');
            $table->unsignedInteger('specialist')->default(0);
            $table->unsignedInteger('physician')->default(0);
            $table->unsignedInteger('assistant')->default(0);
            $table->unsignedInteger('nurse')->default(0);
            $table->unsignedInteger('worker')->default(0);
            $table->unsignedInteger('midwifery')->default(0);
            $table->unsignedInteger('technician')->default(0);
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
        Schema::dropIfExists('hospitals');
    }
}
