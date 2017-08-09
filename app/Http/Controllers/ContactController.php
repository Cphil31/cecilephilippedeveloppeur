<?php

namespace App\Http\Controllers;

use App\Order;
use App\Mail\OrderShipped;
use App\Mail\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;


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
		$content=$request->input('content');
	
		
		return view('right_answer_form_contact', ['name' => $name ,'prenom' => $prenom, 'email'=> $email, 'object'=> $subject,'content'=> $content]);
	}

}