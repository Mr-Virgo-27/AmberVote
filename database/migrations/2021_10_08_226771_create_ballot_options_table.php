<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBallotOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ballot_options', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('question_id')->unsigned();
            $table->foreign('question_id')->references('id')->on('ballot_questions');
//            $table->bigInteger('ballot_id')->unsigned();
//            $table->foreign('ballot_id')->references('id')->on('ballots');
            $table->string('option');
            $table->integer('max_res');
            $table->integer('min_res');
            $table->string('photo');
            $table->string('desc');
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
        Schema::dropIfExists('ballot_options');
    }
}
