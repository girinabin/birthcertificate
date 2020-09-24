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

            $table->string('babyNameInEnglish')->nullable();
            $table->string('babyNameInNepali')->nullable();

            $table->string('genderInEnglish')->nullable();
            $table->string('genderInNepali');

            $table->date('dobInEnglish');
            $table->date('dobInNepali');


            $table->time('timeOfBirthInEnglish')->nullable();
            $table->time('timeOfBirthInNepali');

            $table->integer('weightOfBabyInNepali');
            
            $table->string('numberOfBirthInNepali');
            $table->string('birthTypeInNepali');

            $table->string('grandParentNameInEnglish')->nullable();
            $table->string('grandParentNameInNepali')->nullable();

            $table->string('grandParentGenderInEnglish')->nullable();
            $table->string('grandParentGenderInNepali')->nullable();

            $table->string('fatherNameInEnglish')->nullable();
            $table->string('fatherNameInNepali');
            $table->string('motherNameInEnglish')->nullable();
            $table->string('motherNameInNepali');

            $table->string('provinceInEnglish')->nullable();
            $table->string('provinceInNepali');

            $table->string('districtInEnglish')->nullable();
            $table->string('districtInNepali');

            $table->string('municipalityInEnglish')->nullable();
            $table->string('municipalityInNepali');

            $table->string('villageInEnglish')->nullable();
            $table->string('villageInNepali');

            $table->string('wardNumberInEnglish')->nullable();
            $table->string('wardNumberInNepali');

            $table->string('houseNumberInEnglish')->nullable();
            $table->string('houseNumberInNepali')->nullable();

            $table->string('contactNumberInNepali');
            $table->string('contactNumberInNeplai')->nullable();

            $table->string('status')->default('Pending');
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
