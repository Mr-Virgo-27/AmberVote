<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBallotMsgsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ballot_msgs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('ballot_id')->unsigned();
            $table->foreign('ballot_id')->references('id')->on('ballots');
            $table->string('msg_type');
            $table->text('msg_desc');
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
        Schema::dropIfExists('ballot_msgs');
    }
}
