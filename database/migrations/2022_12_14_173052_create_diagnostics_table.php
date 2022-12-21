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
        Schema::create('diagnostics', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')
            ->nullable()
            ->constrained('patients')
            ->cascadeOnUpdate();
             $table->foreignId('doctor_id')
            ->nullable()
            ->constrained('doctors')
            ->cascadeOnUpdate();
            $table->date('diaDate');
            $table->text('diaDiagnostic');
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
        Schema::dropIfExists('diagnostics');
    }
};
