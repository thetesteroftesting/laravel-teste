pp<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('name');
            $table->string('second_name');
            $table->string('nickname');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('place_of_employment')->unsigned();

            $table->rememberToken();
            $table->timestamps();
//            $table->foreign('place_of_employment')
//                ->references('id')
//                ->on('places_of_employment')
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
        Schema::dropIfExists('users');
    }
}
