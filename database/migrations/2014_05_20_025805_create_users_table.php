<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name_of_company');
            $table->boolean('resident_of_RK');
            $table->string('BIN')->unique();;
            $table->string('manager_name');
            $table->string('company_email')->unique();
            $table->string('password');
            $table->string('code');
            $table->string('country')->nullable();
            $table->unsignedBigInteger('type_of_organization_id')->nullable();
            $table->foreign('type_of_organization_id')->references('id')->on('type_of_organizations');
            $table->unsignedBigInteger('real_locality_id')->nullable();
            $table->foreign('real_locality_id')->references('id')->on('localities');
            $table->unsignedBigInteger('juridical_locality_id')->nullable();
            $table->foreign('juridical_locality_id')->references('id')->on('localities');
            $table->string('real_address')->nullable();
            $table->string('juridical_address')->nullable();
            $table->string('type_of_agency')->nullable();
            $table->string('performer_name');
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->boolean('approved')->default(false);
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
        Schema::dropIfExists('users');
    }
}
