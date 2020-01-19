<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{

    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->unsignedBigInteger('package_id')->nullable();
            $table->string('email');
            $table->string('contact');
            $table->string('comment')->nullable();
            $table->foreign('package_id')->references('id')->on('packages')->onDelete('set null')->onUpdate('cascade');
            $table->string('status')->default('pending');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropForeign('package_id');
        Schema::dropIfExists('invoices');
    }
}