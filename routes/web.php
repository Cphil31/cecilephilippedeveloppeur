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
use Illuminate\Support\Facades\Input;

Route::get('/', 'ViewController@home');
Route::get('/testmail', 'ContactController@mailsend');
Route::get('/competences', 'ViewController@competences');
Route::get('/formations', 'ViewController@formations');
Route::get('/experiences', 'ViewController@experiences');
Route::get('/loisirs', 'ViewController@loisirs');
Route::get('/test', 'ViewController@test');
Route::get('/contact',function(){
	return view('formcontact');
});
Route::post('/contact', function(){
$data=[
	"title"=>"bienvenue",
	"content"=>Input::get('text'),
];

	Mail::send("welcome",$data,function($message){
	$message->to("cecilephilippe31@gmail.com")->subject("contact du site cecilephilippedevellopeur");
	$message->from(Input::get('mail'));
	return ('ok');
	});

});
