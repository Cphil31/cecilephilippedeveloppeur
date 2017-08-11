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



class ContactController extends Controller

{

	 public function mailsend(Request $request)
	    {
	    	Mail::to('cecilephilippe31@gmail.com')->send(new NewContact);
	    }
}
