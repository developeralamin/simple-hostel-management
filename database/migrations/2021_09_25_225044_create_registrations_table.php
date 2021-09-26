<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->integer('room_id');
            $table->integer('course_id')->nullable();
            $table->integer('reg_no')->nullable();
            $table->string('feespm')->nullable();
            $table->string('foodstatus')->nullable();
            $table->string('stayfrom')->nullable();
            $table->string('durations')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('phone_no')->nullable();
            $table->string('email')->nullable();
            $table->string('gurdian_name')->nullable();
            $table->string('gurdian_contact')->nullable();
            $table->string('gurdian_relation')->nullable();
            $table->string('current_address')->nullable();
            $table->string('current_state')->nullable();
            $table->string('current_city')->nullable();
            $table->string('current_pincode')->nullable();
            $table->string('permanent_address')->nullable();
            $table->string('permanent_state')->nullable();
            $table->string('permanent_city')->nullable();
            $table->string('permanent_pincode')->nullable();
            $table->string('posting_date')->nullable();
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
        Schema::dropIfExists('registrations');
    }
}
