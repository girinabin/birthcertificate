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
            $table->unsignedBigInteger('birth_application_form_id');
            $table->integer('registrationNumberInNepali');
            $table->integer('registrationNumberInEnglish');
            $table->date('registrationDateInNepali');
            $table->date('registrationDateInEnglish');
            $table->integer('familyRecordFormNumberInNepali');
            $table->integer('familyRecordFormNumberInEnglish');
            $table->string('registrarNameInNepali');
            $table->string('registrarNameInEnglish');
            $table->string('providerNameInNepali');
            $table->string('providerNameInEnglish');
            $table->string('providerGenderInNepali');
            $table->string('providerGenderInEnglish');
            $table->string('citizenNumberFatherInNepali');
            $table->string('citizenNumberFatherInEnglish');
            $table->date('citizenDateFatherInNepali');
            $table->date('citizenDateFatherInEnglish');
            $table->string('citizenDistrictFatherInNepali');
            $table->string('citizenDistrictFatherInEnglish');
            $table->string('citizenNumberMotherInNepali');
            $table->string('citizenNumberMotherInEnglish');
            $table->date('citizenDateMotherInNepali');
            $table->date('citizenDateMotherInEnglish');
            $table->string('citizenDistrictMotherInNepali');
            $table->string('citizenDistrictMotherInEnglish');
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
