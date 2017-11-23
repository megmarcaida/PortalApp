<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStrandTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('strand', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('track_id')->unsigned();
            $table->foreign('track_id')->references('id')->on('track');
            $table->integer('df_track_id')->unsigned();
            $table->foreign('df_track_id')->references('id')->on('df_track');
            $table->integer('df_strand_id')->unsigned();
            $table->foreign('df_strand_id')->references('id')->on('df_strand');
            $table->string('year_level');
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
        Schema::dropIfExists('strand');
    }
}
