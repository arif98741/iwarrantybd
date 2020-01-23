<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClaimsTable extends Migration
{

    public function up()
    {
        Schema::create('claims', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->unsignedBigInteger('subscriber_id');
            $table->string('phone_name');
            $table->string('address')->nullable();
            $table->string('model');
            $table->string('imei');
            $table->string('details');
            $table->string('problem_pattern');
            $table->string('more_details')->nullable();
            $table->string('image')->nullable();
            $table->tinyinteger('status')->default(0); //pending = 0, completed = 1
            $table->timestamps();
            $table->foreign('subscriber_id')->references('id')->on('subscribers')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('claims');
    }
}