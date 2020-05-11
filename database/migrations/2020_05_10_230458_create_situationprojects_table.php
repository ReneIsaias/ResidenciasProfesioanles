<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSituationprojectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('situationprojects', function (Blueprint $table) {
            //$table->increments('id',11);
            $table->id();
            $table->string('projectSituation',100)->unique();
            $table->string('descriptionSituation',200)->nullable();
            $table->boolean('statusSituation');
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
        Schema::dropIfExists('situationprojects');
    }
}
