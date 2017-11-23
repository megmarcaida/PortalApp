<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeacherTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher', function (Blueprint $table) {
            $table->increments('id');
            $table->string('teacher_no',100)->unique();
            $table->string('firstname',100);
            $table->string('middlename',100);
            $table->string('lastname',100);
            $table->string('birthdate',100);
            $table->string('birthplace',100);
            $table->string('gender',10);
            $table->string('contact',11);
            $table->string('address',255);
            $table->binary('image');
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
        Schema::dropIfExists('teacher');
    }
}
