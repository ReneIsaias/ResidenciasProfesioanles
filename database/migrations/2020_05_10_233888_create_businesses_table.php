<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('businesses', function (Blueprint $table) {
            //$table->increments('id',11);
            $table->id();
            $table->string('rfcBusiness',50)->unique();
            $table->string('nameBusiness',100);
            $table->string('turnBusiness',100);
            $table->string('sectorBusiness',100);
            $table->string('emailBusiness')->unique();
            $table->string('misionBusiness');
            $table->string('addresBusiness');
            $table->string('phoneBusiness',50);
            $table->string('cpBusiness',10);
            $table->foreignId('id_titulars')->references('id')->on('titulars')->onDelete('cascade');
            $table->foreignId('id_staffs')->references('id')->on('staffs')->onDelete('cascade');
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
        Schema::dropIfExists('businesses');
    }
}
