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
		return 'Le nom est ' . $request->input('nom'); 
	}
}
