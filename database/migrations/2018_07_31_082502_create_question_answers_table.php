<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question_answers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('question_id')->unsigned();
            $table->integer('test_id')->unsigned();
            $table->integer('question_option_id')->unsigned();

            $table->timestamps();

//            $table->foreign('question_id')
//                ->references('id')
//                ->on('questions');
//            $table->foreign('test_id')
//                ->references('id')
//                ->on('tests');
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
        Schema::dropIfExists('question_answers');
    }
}
