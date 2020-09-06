<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDelegationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delegations', function (Blueprint $table) {
            $table->bigIncrements('delegationId');
            $table->string('institution', 200);
            $table->string('headDelegate', 200);
            $table->string('contactNumber', 100);
            $table->string('lineId', 200)->nullable()->default(NULL);
            $table->string('email', 200); 
            $table->timestamps();
        });

        Schema::create('delegations_delegates', function (Blueprint $table) {
            $table->bigIncrements('delegationDelegatesId');
            $table->bigInteger('delegationId')->unsigned();
            $table->foreign('delegationId')->references('delegationId')->on('delegations')->onDelete('cascade');

            $table->string('fullName', 200); 
            $table->string('email', 200); 
            $table->string('nationality', 200);
            $table->string('idNumber', 200);
            $table->string('gender', 200);

            $table->text('medicalConditions')->nullable()->default(NULL);
            $table->text('foodRestrictions')->nullable()->default(NULL);
            $table->string('accommodation', 200);

            $table->text('munExperiences')->nullable()->default(NULL); 
            $table->string('firstCouncilPreference', 200)->nullable()->default(NULL);
            $table->string('firstCouncilCountryPreference', 200)->nullable()->default(NULL); 
            $table->text('firstCouncilReason')->nullable()->default(NULL);
            $table->string('secondCouncilPreference', 200)->nullable()->default(NULL);
            $table->string('secondCouncilCountryPreference', 200)->nullable()->default(NULL);
            $table->text('secondCouncilReason')->nullable()->default(NULL);
            $table->string('thirdCouncilPreference', 200)->nullable()->default(NULL);
            $table->string('thirdCouncilCountryPreference', 200)->nullable()->default(NULL);
            $table->text('thirdCouncilReason')->nullable()->default(NULL);
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
        Schema::dropIfExists('delegations');
        Schema::dropIfExists('delegationsDelegate');
        Schema::dropIfExists('delegationsDepositor');
    }
}
