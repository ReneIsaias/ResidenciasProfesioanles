<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypesafesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('typesafes', function (Blueprint $table) {
            //$table->increments('id',11);
            $table->id();
            $table->string('safeName',100)->unique();
            $table->string('descriptionSafe',200)->nullable();
            $table->boolean('statusSafe');
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
        Schema::dropIfExists('typesafes');
    }
}
