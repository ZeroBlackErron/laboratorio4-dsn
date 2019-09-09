<?php

namespace App\Http\Controllers;

use App\Entities\Sport;
use App\Entities\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MainController extends Controller
{
    public function login()
    {
    	if(Session::has('user')) {
    		return redirect()->route('home');
    	}else {
    		return view('login');
    	}
    }

    public function startSession(Request $request)
    {
    	$name = $request->input('name');
    	$password = $request->input('password');
    	$inv = User::where('name', $name)->where('password', $password)->first();
    	if($inv != null) {
    		$user = Session::put('user', $inv);
    		return redirect()->route('home');
    	}
    }

    public function finishSession()
    {
		Session::forget('user');
		return redirect()->route('login');
    }

    public function home()
    {
    	if(Session::has('user')) {
    		$user = Session::get('user');
	    	$sports = Sport::all();
	    	return view('home')->with(compact('user', 'sports'));
    	}else {
    		return redirect()->route('login');
    	}
    }

    public function showSportDetails($sport)
    {
    	if(Session::has('user')) {
    		$user = Session::get('user');
	    	$data = Sport::where('slug', $sport)->get();
	    	return view('sport-details')->with(compact('user', 'data'));
    	}else {
    		return redirect()->route('login');
    	}
    }
}
