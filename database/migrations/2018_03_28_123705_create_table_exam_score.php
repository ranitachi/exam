<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableExamScore extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exam_score', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('batch_participant_id')->default(-1);
            $table->integer('participant_id')->default(-1);
            $table->integer('exam_id')->default(-1);
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
        Schema::dropIfExists('exam_score');
    }
}
