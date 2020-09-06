<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndividualDelegatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('individual_delegates', function (Blueprint $table) {
            $table->bigIncrements('individualDelegatesId');
             
            $table->string('fullName', 200); 
            $table->string('institution', 200); 
            $table->string('nationality', 200);  
            $table->string('idNumber', 200)->nullable()->default(NULL);
            $table->string('gender', 200);

            $table->string('lineId', 200)->nullable()->default(NULL);
            $table->string('contactNumber', 200);
            $table->string('email', 200); 
            $table->text('medicalConditions')->nullable()->default(NULL); 
            $table->text('foodRestrictions')->nullable()->default(NULL);
            $table->string('accommodation', 200);

            $table->text('munExperiences')->nullable()->default(NULL); 
            $table->string('firstCouncilPreference', 200);
            $table->string('firstCouncilCountryPreference', 200);
            $table->text('firstCouncilReason');
            $table->string('secondCouncilPreference', 200);
            $table->string('secondCouncilCountryPreference', 200);
            $table->text('secondCouncilReason');
            $table->string('thirdCouncilPreference', 200);
            $table->string('thirdCouncilCountryPreference', 200);
            $table->text('thirdCouncilReason');
            $table->text('doubleDelegateName', 200)->nullable()->default(NULL);
            $table->text('doubleDelegateInstitution', 200)->nullable()->default(NULL);
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
        Schema::dropIfExists('individual_delegates');
    }
}
