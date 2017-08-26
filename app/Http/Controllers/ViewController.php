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
}
