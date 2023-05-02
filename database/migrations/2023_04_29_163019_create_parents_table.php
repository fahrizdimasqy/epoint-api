<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parents', function (Blueprint $table) {
            $table->id();
            $table->string('nis_student');
            $table->string('username')->unique();
            $table->text('name')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->date('date_and_place_of_birth')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();

//          Foreign
            $table->foreign('nis_student')->references('nis')->on('students');


            $table->softDeletes();
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
        Schema::dropIfExists('parents');
    }
}
