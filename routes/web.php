<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::prefix('admin')->group(function () {
    Route::get('panel', 'Admin\PanelController@index');
    Route::resource('questions', 'Admin\QuestionsController');
    Route::resource('users', 'Admin\UsersController');
});


Route::resource('questions', 'Question\QuestionController');

Route::get('/test', 'Question\TestController@startTest');
Route::prefix('test')->group(function () {
    Route::post('question_answer/save', 'Question\QuestionAnswerController@save');

});