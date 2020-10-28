<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActsOfCompletedWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acts_of_completed_works', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('application_id')->unsigned();
            $table->foreign('application_id')->references('id')->on('applications')->onDelete('cascade');
            $table->date('act_start_date');
            $table->date('act_end_date');
            $table->unsignedBigInteger('number_of_ABP');
            $table->unsignedBigInteger('payment');
            $table->unsignedBigInteger('status');
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
        Schema::dropIfExists('acts_of_completed_works');
    }
}
