<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableBatchExam extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
        Schema::create('batch_exam', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('batch_id')->default(-1);
            $table->integer('exam_id')->default(-1);
            $table->string('exam_name')->unique();
            $table->date('date');
            $table->time('time');
            $table->integer('active')->default(0);
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
        Schema::dropIfExists('batch_exam');
    }
}
