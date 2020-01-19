<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscriptionTable extends Migration
{

    public function up()
    {
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->unsignedBigInteger('package_id')->nullable();
            $table->unsignedBigInteger('subscriber_id');
            $table->string('email');
            $table->string('contact');
            $table->string('comment')->nullable();
            $table->foreign('package_id')->references('id')->on('packages')->onDelete('set null')->onUpdate('cascade');
            $table->foreign('subscriber_id')->references('id')->on('subscribers')->onDelete('cascade')->onUpdate('cascade');
            $table->string('status')->default('pending');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropForeign('package_id');
        Schema::dropForeign('subscriber_id');
        Schema::dropIfExists('invoices');
    }
}