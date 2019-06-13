<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BasicController extends Controller
{
    public function home(){
        $notice_data =  DB::table('notices')
                 ->limit(1)
                 ->get();
        $news_data =  DB::table('news')
                 ->orderBy('created_at', 'desc')
                 ->limit(5)
                 ->get();

        return view('pages/index')->with(compact('news_data','notice_data'));
    }

    public function pagenotfound(){
       return view('errors.404'); 
    }

    public function about(){
    	return view('pages/about');
    }

    public function partialComittee(){
        return view('pages/partialComittee');
    }

    public function underComittee(){
        return view('pages/underComittee');
    }

    public function contact(){
    	return view('pages/contact');
    }

    public function gallery(){
        $result = DB::table('gallery')
                    ->get();
    	return view('pages/gallery')->with('data',$result);
    }


    public function firstSession(){
        return view('pages/yearly_session/first');
    }
    public function secondSession(){
        return view('pages/yearly_session/second');
    }
    public function thirdSession(){
        return view('pages/yearly_session/third');
    }
    public function fourthSession(){
        return view('pages/yearly_session/fourth');
    }
    public function fifthSession(){
        return view('pages/yearly_session/fifth');
    }


}
