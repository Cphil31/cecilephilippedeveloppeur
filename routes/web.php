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

Route::get('/', 'ViewController@home');
Route::get('/contact', 'ViewController@contact');
Route::get('/competences', 'ViewController@competences');
Route::get('/formations', 'ViewController@formations');
Route::get('/experiences', 'ViewController@experiences');
Route::get('/loisirs', 'ViewController@loisirs');
Route::get('answer_contact', 'ContactController@getInfos');

Route::post('answer_contact', 'ContactController@postForm');
Route::post('answer_contact', 'ContactController@ship');
Route::post('answer_contact', 'ContactController@postInfos');
