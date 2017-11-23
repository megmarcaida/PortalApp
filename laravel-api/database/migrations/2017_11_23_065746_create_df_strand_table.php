<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDfStrandTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('df_strand', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('df_track_id')->unsigned();
            $table->foreign('df_track_id')->references('id')->on('df_track');
            $table->string('df_strand');
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
        Schema::dropIfExists('df_strand');
    }
}
