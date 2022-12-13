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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();

            $table->foreignId('clinic_id')
                    ->nullable()
                    ->constrained('clinics')
                    ->cascadeOnUpdate();
            
            $table->foreignId('patient_id')
                    ->nullable()
                    ->constrained('patients')
                    ->cascadeOnUpdate();

            $table->foreignId('doctor_id')
                    ->nullable()
                    ->constrained('doctors')
                    ->cascadeOnUpdate();
                    
            $table->dateTime('apDate');
            $table->string('apReason', 35);
            $table->text('apMedicalRecord');
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
        Schema::dropIfExists('appointments');
    }
};
