<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResidentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('residents', function (Blueprint $table) {
            //$table->increments('id',11);
            $table->id();
            $table->string('residentRegistration',20)->unique();
            $table->string('nameResident',30);
            $table->string('firtsLastnameResident',30);
            $table->string('secondLastnameResident',30)->nullable();
            $table->string('emailResident',50)->unique();
            $table->string('phoneResident',20);
            $table->string('becaResident',50)->nullable();
            $table->string('periodResident',100)->nullable();
            $table->foreignId('id_careers')->references('id')->on('careers')->onDelete('cascade');
            $table->foreignId('id_typesafes')->references('id')->on('typesafes')->onDelete('cascade');
            $table->foreignId('id_semesters')->references('id')->on('semesters')->onDelete('cascade');
            $table->foreignId('id_studiesplans')->references('id')->on('studiesplans')->onDelete('cascade');
            $table->foreignId('id_relatives')->references('id')->on('relatives')->onDelete('cascade');
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
        Schema::dropIfExists('residents');
    }
}
