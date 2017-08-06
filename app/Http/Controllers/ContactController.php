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

	return view('right_answer_form_contact', ['name' => $name ,'prenom' => $prenom]); 
	 
	}
	
}
