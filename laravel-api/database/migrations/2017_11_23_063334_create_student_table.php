<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student', function (Blueprint $table) {
            $table->increments('id');
            $table->string('student_no',100)->unique();
            $table->string('lrn',12);
            $table->string('firstname',100);
            $table->string('middlename',100);
            $table->string('lastname',100);
            $table->string('gender',10);
            $table->string('birthdate',100);
            $table->string('birthplace',100);
            $table->string('address',255);
            $table->string('gname',255);
            $table->string('gcontact',11);
            $table->string('gaddress',255);
            $table->string('relation',20);
            $table->string('year',10);
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
        Schema::dropIfExists('student');
    }
}
