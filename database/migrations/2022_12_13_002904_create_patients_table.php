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
            $table->string('patLastName', 30);
            $table->string('patFirstName', 30);
            $table->string('patPhoneNumber', 20);
            $table->string('patAddress', 150);
            $table->boolean('patInsurance');
            $table->string('patPersonalID', 12);
            $table->string('patCountry', 25);
            $table->string('patEmail', 25);
            $table->date('patBirthDay');
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
