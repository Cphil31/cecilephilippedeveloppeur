<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
	public function getInfos()
	{
		return view('infos');
	}

	public function postInfos(Request $request)
	{
		$name=$request->input('nom');
		$prenom=$request->input('prenom');
		$email=$request->input('email');
		$subject=$request->input('object');
		$message=$request->input('content');
		
		// Mail::send(function($message) 
		// {
		//     $message->to('cecilephilippe31@gmail.com')->subject('Contact');
		// });
		
		return view('right_answer_form_contact', ['name' => $name ,'prenom' => $prenom, 'email'=> $email, 'object'=> $subject,'content'=> $message]); 

	}
}
