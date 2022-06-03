<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableOnlineApplication extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_online_application', function (Blueprint $table) {
            $table->id();
            //Personall Information //done
            $table->string('firstName')->nullable();
            $table->string('middleName')->nullable();
            $table->string('lastName')->nullable();
            $table->date('dateOfBirth')->nullable();
            $table->string('sex')->nullable();
            //Address Information //done
            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('mobile')->nullable();
            $table->string('email')->unique();
            //Enrollment Information //done
            $table->foreignId('currentEducationLevel')->nullable();
            $table->foreignId('currentDepartment')->nullable();
            $table->foreignId('fromInstitution')->nullable();
            $table->foreignId('applyingForProgram')->nullable();
            $table->foreignId('applyingForDepartment')->nullable();
            $table->foreignId('applyingForModality')->nullable();
            //Document's
            $table->string('photoFilePath', 2048)->nullable();
            $table->string('udDegreeFilePath', 2048)->nullable();
            $table->string('udTranscriptFilePath', 2048)->nullable();
            $table->string('hsTranscriptFilePath', 2048)->nullable();
            $table->string('idCardFilePath', 2048)->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_online_application');
    }
}
