<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('full_name');
            $table->integer('dob_year');
            $table->integer('dob_month');
            $table->integer('dob_day');
            $table->integer('age');
            $table->enum('sex', ['M', 'F']);
            $table->string('tribe');
            $table->enum('religion', ['Christianity', 'Islam', 'Other']);
            $table->string('occupation');
            $table->enum('marital_status', ['Single', 'Married', 'Divorced', 'Widowed']);
            $table->text('address');
            $table->string('next_of_kin');
            $table->string('patient_photo_path');
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
        Schema::drop('patients');
    }
}
