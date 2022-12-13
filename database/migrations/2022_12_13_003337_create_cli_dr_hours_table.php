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
        Schema::create('cli_dr_hours', function (Blueprint $table) {
            $table->id();

            $table->foreignId('clinic_id')
                    ->nullable()
                    ->constrained('clinics')
                    ->cascadeOnUpdate();
            
            $table->foreignId('doctor_id')
                    ->nullable()
                    ->constrained('doctors')
                    ->cascadeOnUpdate();

            $table->time('startHour');
            $table->time('endHour');
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
        Schema::dropIfExists('cli_dr_hours');
    }
};
