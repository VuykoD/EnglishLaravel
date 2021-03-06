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

Route::get('/', 'WelcomeController@index');

Route::get('/course', 'CourseController@name');

Route::get('/vocabulary', 'VocabularyController@add_course');

Route::get('/myvocabulary', 'MyVocabularyController@list');

Route::get('/reading', 'ReadingController@all');

Route::get('/readingMore', 'ReadingMoreController@text');

Route::get('/video', 'VideoController@all');

Route::get('/video_training', 'VideoTrainingController@video');

Route::get('/training', 'TrainingController@general');

Route::post('/training', 'ChangeBaseController@ChangeSentenseOrWord');

Route::post('ajaxRequest', 'AjaxController@ajaxRequestPost');

Route::post('ajaxRequestAddOneString', 'AjaxController@ajaxRequestAddOneString');

Route::get('ajaxRequest', 'AjaxController@ajaxRequest');

Route::get('ajaxRequestSoundGame', 'AjaxController@ajaxRequestSoundGame');

Route::get('star_war', 'GameController@general');

Route::get('statistic', 'StatisticController@index');


Auth::routes();

