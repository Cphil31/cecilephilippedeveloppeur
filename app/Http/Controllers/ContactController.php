<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Order;
use Illuminate\Mail\Mailable;
use App\Mail\OrderShipped;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use App\Mail\NewContact;
use Illuminate\Support\Facades\Input;


class ContactController extends Controller

{

	 public function mailsend(request $request)
{
	$data=[
	"title"=>"site développeur",
	"subject"=>Input::get('subject'),
	"nom"=>Input::get('nom'),
	"prenom"=>Input::get('prenom'),
	"content"=>Input::get('text'),
	];
	
	Mail::send("welcome",$data,function($message){
	$message->to("cecilephilippe31@gmail.com")->subject(Input::get('subject'));
	$message->from(Input::get('mail'));
	});
	return view('contact');
	    }
}
