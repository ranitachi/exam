<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableExam extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exam', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('time')->default(-1);
            $table->integer('num_of_question')->default(-1);
            $table->integer('question_1')->default(25);
            $table->integer('question_2')->default(25);
            $table->integer('question_3')->default(25);
            $table->integer('question_4')->default(25);
            $table->integer('total_score');
            $table->integer('passing_score');
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
        Schema::dropIfExists('exam');
    }
}
