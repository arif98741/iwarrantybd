<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubscribersTable extends Migration
{

    public function up()
    {
        Schema::create('subscribers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('unique_id')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('mobile');
            $table->string('address');
            $table->string('status')->default('approved');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('subscribers');
    }
}