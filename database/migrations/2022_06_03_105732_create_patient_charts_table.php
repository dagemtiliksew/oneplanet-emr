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
        Schema::create('patient_charts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id');
            $table->boolean('diabetes')->nullable();
            $table->boolean('hypertension')->nullable();
            $table->boolean('asthma')->nullable();
            $table->boolean('tb')->nullable();
            $table->boolean('hiv')->nullable();
            $table->string('chief_complaints')->nullable();
            $table->string('past_medications')->nullable();
            $table->string('temperature')->nullable();
            $table->string('pulse')->nullable();
            $table->string('blood_pressure')->nullable();
            $table->string('respiratory_rate')->nullable();
            $table->string('oxygen_saturation')->nullable();
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->string('bmi')->nullable();
            $table->string('general_appearance')->nullable();
            $table->string('heent')->nullable();
            $table->string('neck')->nullable();
            $table->string('chest_and_lung')->nullable();
            $table->string('cardiovascular')->nullable();
            $table->string('abdomen')->nullable();
            $table->string('genitourinary')->nullable();
            $table->string('rectal')->nullable();
            $table->string('musculoskeletal')->nullable();
            $table->string('lymph_nodes')->nullable();
            $table->string('extremities')->nullable();
            $table->string('neurological')->nullable();
            $table->string('other')->nullable();
            $table->string('diagnosis')->nullable();
            $table->string('prescription')->nullable();
            $table->timestamps();
            $table->foreign('patient_id')->references('id')->on('patients');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patient_charts');
    }
};
