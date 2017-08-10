<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller

{
	public function getInfos(request $request)
	{

		return view('home');
	} //

   public function postInfos(request $request)
	{
		$name=$request->input('nom');
		$prenom=$request->input('prenom');
		$email=$request->input('email');
		$subject=$request->input('object');
		$content=$request->input('content');

		return view('right_answer_form_contact', ['name' => $name ,'prenom' => $prenom, 'email'=> $email, 'object'=> $subject,'content'=> $content]);
	} //
}
