<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
	public function home(){
    	return view('home');
    }
    public function contact(){
    	return view('contact');
    }
    public function competences(){
    	return view('competences');
    }
    public function formations(){
    	return view('formations');
    }
    public function experiences(){
        return view('experiences');
    }
    public function loisirs(){
    	return view('loisirs');
    }

    public function test(){
        return view('layouts.layout_home2');
    }

    // public function postInfos(request $request)
    // {
    //     $name=$request->input('nom');
    //     $prenom=$request->input('prenom');
    //     $email=$request->input('email');
    //     $subject=$request->input('object');
    //     $content=$request->input('content');

    //     return view('right_answer_form_contact', ['name' => $name ,'prenom' => $prenom, 'email'=> $email, 'object'=> $subject,'content'=> $content]);
    // } //

}
