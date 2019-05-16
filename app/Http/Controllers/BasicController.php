<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BasicController extends Controller
{
    public function home(){
        $notice_data =  DB::table('notices')
                 ->orderBy('created_at', 'desc')
                 ->limit(1)
                 ->get();
        $news_data =  DB::table('news')
                 ->orderBy('created_at', 'desc')
                 ->limit(5)
                 ->get();
        $legislations_data = DB::table('legislations')->paginate(5);
        return view('pages/index')->with(compact('news_data', 'legislations_data','notice_data'));
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
                    ->paginate(12);
    	return view('pages/gallery')->with('data',$result);
    }

    public function viewNewsById($id){
        $result = DB::table('news')->where('id',$id)->get();
        return view('pages/news_view')->with('data',$result);
    }

}
