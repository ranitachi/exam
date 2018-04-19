<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableExamSet extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exam_set', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('exam_participant_id')->default(-1);
            $table->integer('question_id')->default(-1);
            $table->integer('answer_id')->default(-1);
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
        Schema::dropIfExists('exam_set');
    }
}
