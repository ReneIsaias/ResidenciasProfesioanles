<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypestaffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('typestaffs', function (Blueprint $table) {
            //$table->increments('id',11);
            $table->id();
            $table->string('nameTypeStaff',100)->unique();
            $table->string('descriptionStaff',200)->nullable();
            $table->boolean('statusStaff');
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
        Schema::dropIfExists('typestaffs');
    }
}
