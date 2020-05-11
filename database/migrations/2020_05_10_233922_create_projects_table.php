<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            //$table->increments('id',11);
            $table->id();
            $table->string('keyProject',50)->unique();
            $table->string('nameProject',200)->unique();
            $table->string('descriptionProject');
            $table->string('objetivesProject');
            $table->date('dateStart');
            $table->date('dateEnd');
            $table->integer('qualificationProject')->nullable();
            $table->string('revisionProject')->nullable();
            $table->date('dateRevision')->nullable();
            $table->string('hourlyProject');
            $table->date('dateRealRevicion')->nullable();
            $table->foreignId('id_situationprojects')->references('id')->on('situationprojects')->onDelete('cascade')->nullable();
            $table->foreignId('id_reports')->references('id')->on('reports')->onDelete('cascade')->nullable();
            $table->foreignId('id_businesses')->references('id')->on('businesses')->onDelete('cascade');
            $table->foreignId('id_residents')->references('id')->on('residents')->onDelete('cascade');
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
        Schema::dropIfExists('projects');
    }
}
