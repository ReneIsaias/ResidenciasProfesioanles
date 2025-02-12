<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staffs', function (Blueprint $table) {
            //$table->increments('id',11);
            $table->id();
            $table->string('keyStaff',30)->unique();
            $table->string('nameStaff',30);
            $table->string('firstLastname',30);
            $table->string('secondLastname',30)->nullable();
            $table->string('emailStaff',50)->unique();
            //$table->timestamp('email_verified_at')->nullable();
            $table->string('passwordStaff',50);
            //$table->rememberToken();
            $table->string('phoneStaff',20);
            $table->boolean('statusStaff');
            $table->foreignId('id_posts')->references('id')->on('posts')->onDelete('cascade')->nullable();
            //$table->foreignId('id_typestaff')->references('id')->on('typestaffs')->onDelete('cascade');
            $table->foreignId('id_degreestudies')->references('id')->on('degreestudies')->onDelete('cascade')->nullable();
            $table->foreignId('id_careers')->references('id')->on('careers')->onDelete('cascade')->nullable();
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
        Schema::dropIfExists('staffs');
    }
}
