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

Route::get('/',['as'=>'home', function () {
    return view('welcome');
}]);

Route::get('/home',['middleware' => 'sentry.auth', function() {
    return view('home');
}]);

////////////////////
// RESUMES ROUTES //
////////////////////

Route::group(['prefix' => 'resumes','middleware'=>'sentry.auth'], function() {
    Route::get('/',['as'=>'resumes.index','uses'=>'ResumeController@index']);
    Route::get('/create',['as'=>'resumes.create','uses'=>'ResumeController@create']);
    Route::post('/store',['as'=>'resumes.store','uses'=>'ResumeController@store']);
});