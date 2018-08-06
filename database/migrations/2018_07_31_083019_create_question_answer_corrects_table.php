<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionAnswerCorrectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question_answer_corrects', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('question_number');
            $table->integer('question_option_id')->unsigned();

//            $table->foreign('question_id')
//                ->references('id')
//                ->on('questions');
//            $table->foreign('question_option_id')
//                ->references('id')
//                ->on('question_options');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('question_answer_corrects');
    }
}
