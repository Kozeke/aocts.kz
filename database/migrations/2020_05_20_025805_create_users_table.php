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
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->string('BIN')->unique();;
            $table->timestamp('email_verified_at')->nullable();
            $table->string('manager_name');
            $table->string('manager_phone')->unique();
            $table->string('company_email')->unique();
            $table->unsignedBigInteger('locality_id')->nullable();
            $table->foreign('locality_id')->references('id')->on('localities');
            $table->string('address')->nullable();
            $table->unsignedBigInteger('role_id');
            $table->foreign('role_id')->references('id')->on('roles');
            $table->string('password');
            $table->boolean('approved')->default(false);

            $table->rememberToken();
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
