<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;
use Redirect;

class UserController extends Controller
{   

    public function getLogin(){
        return view('pages/login');
    }

    //Request Users login
    public function postLogin(Request $request)
    {
    	$this->validate($request,[
            'username' => 'required',
            'password' => 'required',
        ]);
    	$result = DB::table('users')
    				->where('username',$request->username)
    				->where('password',$request->password)
    				->first();
 
    	if ($result) {
    		Session::put('username',$result->username);
    		return Redirect::to('/dashboard');
    	}
    	else {
    		Session::put('exception', 'Invalid username or password.');
    		return Redirect::to('/login');
    	}
    }


    // Logout From Dashboard
    public function logout()
    {
        Session::put('username',null);
        return redirect('/');
    }
}
