<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('gender');
            $table->string('phone_no');
            $table->string('phone_no2')->nullable();
            $table->string('home_phone')->nullable();
            $table->string('email')->unique();
            $table->dateTime('date_of_birth');
            $table->string('id_no')->nullable();
            $table->string('id_type')->nullable();
            $table->string('martial_status')->nullable();
            $table->string('occupation')->nullable();
            $table->string('credit')->nullable();
            $table->string('credit_company')->nullable();
            $table->string('emergency_contact_name')->nullable();
            $table->string('emergency_contact_rel')->nullable();
            $table->string('emergency_contact_phone')->nullable();
            $table->string('emergency_contact_phone_2')->nullable();
            $table->string('emergency_contact_memo')->nullable();
            $table->string('city')->nullable();
            $table->string('sub_city')->nullable();
            $table->string('region');
            $table->string('woreda')->nullable();
            $table->string('zone')->nullable();
            $table->string('house_no')->nullable();
            $table->string('memo')->nullable();
            $table->string('card_no')->nullable();
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
        Schema::dropIfExists('patients');
    }
};
