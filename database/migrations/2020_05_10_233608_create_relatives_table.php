<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelativesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relatives', function (Blueprint $table) {
            //$table->increments('id',11);
            $table->id();
            $table->string('nameRelative',30);
            $table->string('firstLastname',30);
            $table->string('secondLastname',30)->nullable();
            $table->string('phoneRelative',20);
            $table->string('addresRelative',200);
            $table->foreignId('id_typefamily')->references('id')->on('typefamilies')->onDelete('cascade');
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
        Schema::dropIfExists('relatives');
    }
}
