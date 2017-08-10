<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Mail\OrderShipped;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;


class ContactController extends Controller

{
	public function getInfos(request $request)
	{

		return view('home');
	} //

	 public function ship(Request $request, $orderId)
	    {
	    	$email=$request->input('email');
	        $order = Order::findOrFail($orderId);
	        $gmail='cecilephilippe31@gmail.com';
	        $testsend=  view ('emails.messages.created');
	        

	        Mail::to($email)->send($testsend);
	    }


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
