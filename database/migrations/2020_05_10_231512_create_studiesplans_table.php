<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudiesplansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studiesplans', function (Blueprint $table) {
            //$table->increments('id',11);
            $table->id();
            $table->string('planStudies',100)->unique();
            $table->string('descriptionPlan',200)->nullable();
            $table->date('planDate');
            $table->boolean('planStatus');
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
        Schema::dropIfExists('studiesplans');
    }
}
