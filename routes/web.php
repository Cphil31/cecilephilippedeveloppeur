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
    return view('home');
});
Route::get('/competences', function () {
    return view('competences');
});
Route::get('/formations', function () {
    return view('formations');
});
Route::get('/experiences', function () {
    return view('experiences');
});
Route::get('/loisirs', function () {
    return view('loisirs');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('answer_contact', 'ContactController@getInfos');
Route::post('answer_contact', 'ContactController@postForm');
Route::post('answer_contact', 'ContactController@postInfos');



