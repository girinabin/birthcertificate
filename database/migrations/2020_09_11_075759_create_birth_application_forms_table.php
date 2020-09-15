<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBirthApplicationFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('birth_application_forms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('health_post_id');
            $table->integer('babyIdentifyNumber')->unique();

            $table->string('babyNameInNepali')->nullable();
            $table->string('babyNameInEnglish')->nullable();

            $table->string('genderInNepali')->nullable();
            $table->string('genderInEnglish');

            $table->date('dobInNepali')->nullable();
            $table->date('dobInEnglish');


            $table->time('timeOfBirthInNepali')->nullable();
            $table->time('timeOfBirthInEnglish');

            $table->time('weightOfBabyInEnglish');

            $table->string('grandParentNameInNepali')->nullable();
            $table->string('grandParentNameInEnglish')->nullable();

            $table->string('grandParentGenderInNepali')->nullable();
            $table->string('grandParentGenderInEnglish')->nullable();

            $table->string('fatherNameInNepali')->nullable();
            $table->string('fatherNameInEnglish');
            $table->string('motherNameInNepali')->nullable();
            $table->string('motherNameInEnglish');

            $table->string('provinceInNepali')->nullable();
            $table->string('provinceInEnglish');

            $table->string('districtInNepali')->nullable();
            $table->string('districtInEnglish');

            $table->string('municipalityInNepali')->nullable();
            $table->string('municipalityInEnglish');

            $table->string('villageInNepali')->nullable();
            $table->string('villageInEnglish');

            $table->string('wardNumberInNepali')->nullable();
            $table->string('wardNumberInEnglish');

            $table->string('houseNumberInNepali')->nullable();
            $table->string('houseNumberInEnglish')->nullable();

            $table->string('contactNumberInEnglish');
            $table->string('contactNumberInNeplai')->nullable();

            $table->string('status')->nullable();
            $table->foreign('health_post_id')->references('id')->on('health_posts')->onDelete('CASCADE');


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
        Schema::dropIfExists('birth_application_forms');
    }
}
