<?php 

namespace App\Http\Controllers;


class indexController extends Controller
{

	function showindex(){
	
	    return view('index');
	}
	
	function showabout(){
	
	    return view('about');
	}

	

	function showcontact(){

		return view('contact');

	}

	function showproduct(){

		return view('product');

	}
}