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
		return 'votre nom est ' . $request->input('nom') .' '. $request->input('prenom'); 
	}

	public function post2Infos(Request $request)
	{
		return view('reponse_form_contact'); 
	}
	
}
