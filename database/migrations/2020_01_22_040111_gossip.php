<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Gossip extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gossip', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('sender')->nullable();
            $table->string('reciever')->nullable();
            $table->string('council')->nullable();
            $table->string('title');
            $table->string('image')->nullable();
            $table->text('body');
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
        Schema::dropIfExists('gossip');
    }
}
