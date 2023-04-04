<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeniorCitizensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('senior_citizens', function (Blueprint $table) {
            $table->id();
            $table->string('registration_number')->nullable()->comment('Registration Number');
            $table->string('name')->nullable()->comment('Name');
            $table->date('dob')->nullable()->comment('Date Of Birth');
            $table->bigInteger('contact_no')->nullable()->comment('Contact Number');
            $table->longText('communication_address')->nullable()->comment('Communication Address');
            $table->string('profile_pic')->nullable()->comment('Profile Picture');
            $table->longText('emergency_address')->nullable()->comment('Emergency Address');
            $table->string('added_by')->nullable()->comment('Author');
            $table->date('registation_date')->nullable()->comment('Regitration Date');
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
        Schema::dropIfExists('senior_citizens');
    }
}
