<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('question_number')->unique();
            $table->text('text');
            //$table->integer('options_id')->unsigned();
            $table->text('description');
            $table->integer('effect_of_progress_id')->unsigned();
            $table->string('question_type');
            $table->text('order')->nullable();
            $table->text('data')->nullable();
//            $table->foreign('options_id')
//                ->references('id')
//                ->on('question_options')
//                ->onDelete('cascade');
//            $table->foreign('answer_correct_id')
//                ->references('id')
//                ->on('question_answer_corrects')
//                ->onDelete('cascade');
//            $table->foreign('effect_of_progress_id')
//                ->references('id')
//                ->on('effects_of_progresses')
//                ->onDelete('cascade');
//            $table->foreign('question_type_id')
//                ->references('id')
//                ->on('question_types')
//                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
