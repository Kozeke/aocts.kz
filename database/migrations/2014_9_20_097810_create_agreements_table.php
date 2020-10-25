<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgreementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agreements', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('application_id')->unsigned();
            $table->foreign('application_id')->references('id')->on('applications')->onDelete('cascade');
            $table->unsignedBigInteger('bank_req_id')->unsigned();
            $table->foreign('bank_req_id')->references('id')->on('bank_requisites')->onDelete('cascade');
            $table->string('business_index');
            $table->string('address');
            $table->string('access_road');
            $table->unsignedBigInteger('amount_of_carriage_on_loading');
            $table->unsignedBigInteger('amount_of_carriage_on_unloading');
            $table->unsignedBigInteger('size_of_the_simultaneous_supply_of_wagons');
            $table->string('carriage_address');
            $table->date('agreement_start_date');
            $table->date('agreement_end_date');
            $table->string('performer')->nullable();
            $table->string('company_name')->nullable();
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
        Schema::dropIfExists('agreements');
    }
}
