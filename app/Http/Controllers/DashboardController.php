<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;
use Redirect;

class DashboardController extends Controller
{
    // return admin dashboard
    public function dashboard()
    {   
        if (Session::get('username')) {
            return view('backend/dashboard');
        }
        else {
            return Redirect::to('/')->with('exception', 'To access Dashboard,Please Login First.');
        }
    	
    }

}
