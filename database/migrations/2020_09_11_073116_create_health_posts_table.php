<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHealthPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('health_posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('municipality_id');
            $table->string('healthPostName');
            $table->unsignedInteger('registrationNumber');
            $table->date('registrationDate');
            $table->unsignedInteger('panNumber');
            $table->unsignedInteger('wardNumber');
            $table->integer('contactNumberFirst');
            $table->integer('contactNumberSecond')->nullable();
            $table->string('faxNumber');
            $table->string('postBoxNumber');
            $table->boolean('status')->default(0);
            $table->foreign('user_id')->references('id')->on('users')->onDelete('CASCADE');
            $table->foreign('municipality_id')->references('id')->on('municipalities')->onDelete('CASCADE');
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
        Schema::dropIfExists('health_posts');
    }
}
