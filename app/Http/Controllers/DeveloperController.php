<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeveloperController extends Controller
{	
	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('developer',['except'=>'test']);
    }

    public function index(){
    	return view('developer');
    }

    public function test(){
    	return view('test');
    }

    /*Create the function for the pages that can be accessed only by developer over here*/
}
