<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableExamParticipant extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exam_participant', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('batch_exam_id')->default(-1);
            $table->integer('batch_participant_id')->default(-1);
            $table->integer('participant_id')->default(-1);
            $table->string('ticket')->default(-1);
            $table->integer('active')->default(1);
            $table->integer('remaining_time')->default(0);
            $table->integer('pass')->default(0);
            $table->double('score')->default(0);
            $table->timestamps();
            $table->softdeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exam_participant');
    }
}
