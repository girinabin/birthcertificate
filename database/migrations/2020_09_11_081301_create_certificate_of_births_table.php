<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertificateOfBirthsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificate_of_births', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('birth_application_form_id')->nullable();

            $table->string('babyNameInNepali')->nullable();
            $table->string('babyNameInEnglish')->nullable();

            $table->integer('registrationNumberInNepali')->nullable();
            $table->integer('registrationNumberInEnglish')->nullable();

            $table->string('registrationDateInNepali')->nullable();
            $table->string('registrationDateInEnglish')->nullable();

            $table->integer('familyRecordFormNumberInNepali')->nullable();
            $table->integer('familyRecordFormNumberInEnglish')->nullable();

            $table->string('registrarNameInNepali')->nullable();
            $table->string('registrarNameInEnglish')->nullable();

            $table->string('providerNameInNepali')->nullable();
            $table->string('providerNameInEnglish')->nullable();

            $table->string('providerGenderInNepali')->nullable();

            $table->string('fatherNameInNepali')->nullable();
            $table->string('fatherNameInEnglish')->nullable();

            $table->string('motherNameInNepali')->nullable();
            $table->string('motherNameInEnglish')->nullable();

            $table->string('citizenNumberFatherInNepali')->nullable();
            $table->string('citizenNumberFatherInEnglish')->nullable();
            $table->string('citizenDateFatherInNepali')->nullable();
            $table->string('citizenDateFatherInEnglish')->nullable();
            $table->string('citizenDistrictFatherInNepali')->nullable();
            $table->string('citizenDistrictFatherInEnglish')->nullable();
            $table->string('citizenNumberMotherInNepali')->nullable();
            $table->string('citizenNumberMotherInEnglish')->nullable();
            $table->string('citizenDateMotherInNepali')->nullable();
            $table->string('citizenDateMotherInEnglish')->nullable();
            $table->string('citizenDistrictMotherInNepali')->nullable();
            $table->string('citizenDistrictMotherInEnglish')->nullable();
            $table->string('status')->nullable();
            $table->foreign('birth_application_form_id')->references('id')->on('birth_application_forms')->onDelete('CASCADE');

















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
        Schema::dropIfExists('certificate_of_births');
    }
}
