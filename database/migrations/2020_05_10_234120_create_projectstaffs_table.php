<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectstaffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_staffs', function (Blueprint $table) {
            $table->id();
            $table->integer('calification');
            $table->string('descriptionCalification',200)->nullable();
            $table->foreignId('id_projects')->references('id')->on('projects')->onDelete('cascade');
            $table->foreignId('id_staffs')->references('id')->on('staffs')->onDelete('cascade');
            $table->foreignId('id_situationprojects')->references('id')->on('situationprojects')->onDelete('cascade');
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
        Schema::dropIfExists('projectstaffs');
    }
}
