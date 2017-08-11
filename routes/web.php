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
use \App\Mail\NewContact;

Route::get('/', 'ViewController@home');
Route::get('/contact', 'ViewController@contact');
Route::get('/competences', 'ViewController@competences');
Route::get('/formations', 'ViewController@formations');
Route::get('/experiences', 'ViewController@experiences');
Route::get('/loisirs', 'ViewController@loisirs');
Route::get('answer_contact', 'ContactController@getInfos');
Route::get('/test', 'ContactController@mailsend');
Route::post('answer_contact', 'ContactController@postForm');
Route::post('answer_contact', 'ViewController@postInfos');
