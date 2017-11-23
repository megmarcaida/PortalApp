<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('class_name');
            $table->integer('curriculum_id')->unsigned();
            $table->foreign('curriculum_id')->references('id')->on('curriculums');
            $table->integer('track_id')->unsigned();
            $table->foreign('track_id')->references('id')->on('track');
            $table->integer('strand_id')->unsigned();
            $table->foreign('strand_id')->references('id')->on('strand');
            $table->string('year_level');
            $table->string('semester');
            $table->integer('school_year')->unsigned();
            $table->foreign('school_year')->references('id')->on('school_year');
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
        Schema::dropIfExists('classes');
    }
}
