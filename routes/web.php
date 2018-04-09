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

Route::get('/course', 'CourseController@name');

Route::get('/vocabulary', 'VocabularyController@add_course');

Route::get('/reading', 'ReadingController@all');

Route::get('/readingMore', 'ReadingMoreController@text');

Route::get('/video', 'VideoController@all');

Route::get('/video_training', 'VideoTrainingController@video');

Route::get('/training', 'TrainingController@general');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
