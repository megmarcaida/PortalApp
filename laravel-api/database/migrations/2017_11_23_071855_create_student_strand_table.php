<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentStrandTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_strand', function (Blueprint $table) {
          $table->increments('id');
          $table->string('student_no');
          $table->integer('curriculum_id')->unsigned();
          $table->foreign('curriculum_id')->references('id')->on('curriculums');
          $table->integer('df_track_id')->unsigned();
          $table->foreign('df_track_id')->references('id')->on('df_track');
          $table->integer('df_strand_id')->unsigned();
          $table->foreign('df_strand_id')->references('id')->on('df_strand');
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
        Schema::dropIfExists('student_strand');
    }
}
