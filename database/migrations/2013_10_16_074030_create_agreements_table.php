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
            $table->unsignedBigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
